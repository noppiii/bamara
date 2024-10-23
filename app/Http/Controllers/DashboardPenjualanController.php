<?php

namespace App\Http\Controllers;

use App\Charts\SalesLastYearChart;
use App\Charts\UserLastMonthChart;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardPenjualanController extends Controller
{
    public function index(Request $request, SalesLastYearChart $lastYearChart, UserLastMonthChart $userLastMonthChart)
    {
        $user = $request->session()->get('user');
        $amountSalesLastYear = Order::whereYear('created_at', Carbon::now()->year)
            ->where('status', 'completed')
            ->sum('total_price');
        $amountSalesLastYear = $this->formatRupiah($amountSalesLastYear);

        return view('pages.admin.dashboard.dashboard-penjualan', compact('user', 'amountSalesLastYear'), [
            'lastYearChart' => $lastYearChart->build(),
            'userLastMonthChart' => $userLastMonthChart->build()
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
