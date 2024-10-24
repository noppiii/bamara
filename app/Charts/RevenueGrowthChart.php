<?php

namespace App\Charts;

use App\Models\Order;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;


class RevenueGrowthChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $daysOfWeek = ['S', 'M', 'T', 'W', 'T', 'F', 'S'];

        $revenues = [];

        for ($i = 0; $i < 7; $i++) {
            $date = Carbon::now()->startOfWeek()->addDays($i);

            $totalRevenue = Order::where('status', 'completed')
                ->whereDate('created_at', $date)
                ->sum('total_price');

            $revenues[] = $totalRevenue;
        }

        $colors = ['#FF5733', '#28A745', '#FFC300', '#1E90FF', '#8A2BE2', '#FF1493', '#FF4500'];

        return $this->chart->barChart()
            ->addData('Revenue', $revenues)
            ->setWidth(400)
            ->setXAxis($daysOfWeek)
            ->setColors($colors)
            ->setHeight(235);
    }
}
