<?php

namespace App\Http\Controllers;

use App\Charts\OrderItemLastYearChart;
use App\Charts\OrderLastYearChart;
use App\Charts\RevenueGrowthChart;
use App\Charts\SalesLastYearChart;
use App\Charts\UserLastMonthChart;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPenjualanController extends Controller
{
    public function index(Request $request, SalesLastYearChart $lastYearChart, UserLastMonthChart $userLastMonthChart, RevenueGrowthChart $revenueGrowthChart, OrderLastYearChart $orderLastYearChart, OrderItemLastYearChart $orderItemLastYearChart)
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

        return view('pages.admin.dashboard.dashboard-penjualan', compact('user', 'amountSalesLastYear', 'totalUser', 'totalSalesLastWeek', 'totalSalesToday'), [
            'lastYearChart' => $lastYearChart->build(),
            'userLastMonthChart' => $userLastMonthChart->build(),
            'revenueGrowthChart' => $revenueGrowthChart->build(),
            'orderLastYearChart' => $orderLastYearChart->build(),
            'orderItemLastYearChart' => $orderItemLastYearChart->build()
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
