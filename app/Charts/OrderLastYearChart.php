<?php

namespace App\Charts;

use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class OrderLastYearChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $currentYear = Carbon::now()->year;

        $completedOrders = Order::selectRaw('COUNT(*) as total, MONTH(created_at) as month')
            ->where('status', 'completed')
            ->whereYear('created_at', $currentYear)
            ->groupByRaw('MONTH(created_at)')
            ->orderBy('month')
            ->pluck('total', 'month');

        $pendingOrders = Order::selectRaw('COUNT(*) as total, MONTH(created_at) as month')
            ->where('status', 'pending')
            ->whereYear('created_at', $currentYear)
            ->groupByRaw('MONTH(created_at)')
            ->orderBy('month')
            ->pluck('total', 'month');

        $cancelOrders = Order::selectRaw('COUNT(*) as total, MONTH(created_at) as month')
            ->where('status', 'cancel')
            ->whereYear('created_at', $currentYear)
            ->groupByRaw('MONTH(created_at)')
            ->orderBy('month')
            ->pluck('total', 'month');

        $completedData = [];
        $pendingData = [];
        $cancelData = [];
        for ($month = 1; $month <= 12; $month++) {
            $completedData[] = $completedOrders->get($month, 0);
            $pendingData[] = $pendingOrders->get($month, 0);
            $cancelData[] = $cancelOrders->get($month, 0);
        }

        return $this->chart->areaChart()
            ->addData('Completed Orders', $completedData)
            ->addData('Pending Orders', $pendingData)
            ->addData('Cancelled Orders', $cancelData)
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'])
            ->setHeight(300)
            ->setColors(['#28a745', '#ffc107', '#dc3545']);
    }
}

