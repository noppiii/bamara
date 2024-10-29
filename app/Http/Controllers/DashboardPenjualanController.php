<?php

namespace App\Http\Controllers;

use App\Charts\OrderItemLastYearChart;
use App\Charts\OrderLastYearChart;
use App\Charts\ProfitYearChart;
use App\Charts\RevenueGrowthChart;
use App\Charts\SalesLastYearChart;
use App\Charts\TransactionPaymentMethodChart;
use App\Charts\UserLastMonthChart;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Midtrans\Transaction;

class DashboardPenjualanController extends Controller
{
    public function index(Request $request, SalesLastYearChart $lastYearChart, UserLastMonthChart $userLastMonthChart, RevenueGrowthChart $revenueGrowthChart, OrderLastYearChart $orderLastYearChart, OrderItemLastYearChart $orderItemLastYearChart, ProfitYearChart $profitYearChart, TransactionPaymentMethodChart $transactionPaymentMethodChart)
    {
        $user = $request->session()->get('user');
        $amountSalesLastYear = Order::whereYear('created_at', Carbon::now()->year)
            ->where('status', 'completed')
            ->sum('total_price');
        $amountSalesLastYear = self::formatRupiah($amountSalesLastYear);

        $totalUser = User::count();

        $startDate = Carbon::now()->subDays(7);
        $endDate = Carbon::now();

        $totalSalesLastWeek = Order::where('status', 'completed')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->where('status', 'completed')
            ->sum('total_price');
        $totalSalesLastWeek = self::formatRupiah($totalSalesLastWeek);

        $totalSalesToday = Order::whereDate('created_at', Carbon::today())
            ->where('status', 'completed')
            ->sum('total_price');
        $totalSalesToday = self::formatRupiah($totalSalesToday);

        $recentOrder = Order::orderBy('created_at', 'desc')->take(10)->get();
        $productStock = Product::orderBy('stock', 'asc')->take(10)->get();
        $recentTransaction = Payment::orderBy('created_at', 'desc')->take(5)->get();

        $latestWishlist = Wishlist::where('user_id', $user->id)->with('product')->latest()->first();
        $latestCart = Cart::where('user_id', $user->id)->with('product')->latest()->first();
        $latestOrder = Order::where('user_id', $user->id)
            ->with('orderItems.product')
            ->latest()
            ->first();
        $latestPayment = Payment::whereHas('order', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        })
            ->latest()
            ->first();
        $latestActivity = collect([$latestWishlist, $latestCart, $latestOrder, $latestPayment])
            ->filter()
            ->sortByDesc('created_at')
            ->first();
//        dd($latestActivity->toArray());

        return view('pages.admin.dashboard.dashboard-penjualan', compact('user', 'amountSalesLastYear', 'totalUser', 'totalSalesLastWeek', 'totalSalesToday', 'recentOrder', 'productStock', 'recentTransaction', 'latestActivity', 'latestWishlist', 'latestCart', 'latestOrder', 'latestPayment'), [
            'lastYearChart' => $lastYearChart->build(),
            'userLastMonthChart' => $userLastMonthChart->build(),
            'revenueGrowthChart' => $revenueGrowthChart->build(),
            'orderLastYearChart' => $orderLastYearChart->build(),
            'orderItemLastYearChart' => $orderItemLastYearChart->build(),
            'profitYearChart' => $profitYearChart->build(),
            'transactionPaymentMethodChart' => $transactionPaymentMethodChart->build()
        ]);
    }

    public static function formatRupiah($number)
    {
        if ($number >= 1000) {
            return number_format($number / 1000, 0, ',', '.') . 'K';
        }
        return number_format($number, 0, ',', '.');
    }
}
