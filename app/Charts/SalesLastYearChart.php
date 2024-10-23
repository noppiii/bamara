<?php

namespace App\Charts;

use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class SalesLastYearChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $currentYear = Carbon::now()->year;

        $janToJunOrders = Order::whereYear('created_at', $currentYear)
            ->whereMonth('created_at', '>=', 1)
            ->whereMonth('created_at', '<=', 6)
            ->count();

        $julToDecOrders = Order::whereYear('created_at', $currentYear)
            ->whereMonth('created_at', '>=', 7)
            ->whereMonth('created_at', '<=', 12)
            ->count();

        $ordersData = [$janToJunOrders, $julToDecOrders];

        return $this->chart->areaChart()
            ->addData('Total Orders', $ordersData)
            ->setXAxis(['Jan-Jun', 'Jul-Dec'])
            ->setHeight(140)
            ->setColors(['#FF5733']);
    }
}
