<?php

namespace App\Charts;

use App\Models\Payment;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TransactionPaymentMethodChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PolarAreaChart
    {
        $danaCount = Payment::where('payment_method', 'dana')->count();
        $gopayCount = Payment::where('payment_method', 'gopay')->count();
        $shopeePayCount = Payment::where('payment_method', 'shopeepay')->count();

        $data = [$danaCount, $gopayCount, $shopeePayCount];
        $labels = ['Dana', 'GoPay', 'ShopeePay'];

        return $this->chart
            ->polarAreaChart()
            ->addData($data)
            ->setLabels($labels);
    }
}
