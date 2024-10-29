<?php

namespace App\Charts;

use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class ProfitYearChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(int $year = null): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $year = $year ?? now()->year;

        $monthlyProfits = array_fill(0, 12, 0);

        $completedOrders = Order::where('status', 'completed')
            ->whereYear('created_at', $year)
            ->selectRaw('SUM(total_price) as total_profit, MONTH(created_at) as month')
            ->groupBy('month')
            ->get();

        foreach ($completedOrders as $order) {
            $monthlyProfits[$order->month - 1] = $order->total_profit;
        }

        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        return $this->chart->areaChart()
            ->addData('Profit', $monthlyProfits)
            ->setXAxis($months)
            ->setHeight(300)
            ->setWidth(600);
    }
}
