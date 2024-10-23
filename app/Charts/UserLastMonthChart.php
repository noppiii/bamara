<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class UserLastMonthChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        $currentMonth = now()->month;
        $currentYear = now()->year;

        $previousMonth = $currentMonth == 1 ? 12 : $currentMonth - 1;

        $usersLastTwoMonths = User::selectRaw('COUNT(*) as total, MONTH(created_at) as month')
            ->where('status_account', 'active')
            ->whereMonth('created_at', '>=', $previousMonth)
            ->whereYear('created_at', $currentYear)
            ->groupByRaw('MONTH(created_at)')
            ->orderBy('month')
            ->pluck('total', 'month');

        $data = [];
        $data[] = $usersLastTwoMonths->get($previousMonth, 0);
        $data[] = $usersLastTwoMonths->get($currentMonth, 0);

        return $this->chart->areaChart()
            ->addData('Active Users', $data)
            ->setHeight(140)
            ->setColors(['#11f220'])
            ->setXAxis([
                now()->subMonth()->format('M'),
                now()->format('M')
            ]);
    }
}
