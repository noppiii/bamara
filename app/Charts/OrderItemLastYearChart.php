<?php

namespace App\Charts;

use App\Models\OrderItem;
use App\Models\Product;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderItemLastYearChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $currentYear = Carbon::now()->year;

        $monthlyData = [];

        for ($month = 1; $month <= 12; $month++) {
            $topOrderItems = OrderItem::select('product_id', DB::raw('SUM(quantity) as total_quantity'))
                ->join('orders', 'order_items.order_id', '=', 'orders.id')
                ->whereYear('orders.created_at', $currentYear)
                ->whereMonth('orders.created_at', $month)
                ->where('orders.status', 'completed')
                ->groupBy('product_id')
                ->orderBy('total_quantity', 'desc')
                ->take(5)
                ->get();

            foreach ($topOrderItems as $orderItem) {
                $product = Product::find($orderItem->product_id);
                if ($product) {
                    $shortName = implode(' ', array_slice(explode(' ', $product->name), 0, 3));
                    $monthlyData[$shortName][$month] = $orderItem->total_quantity;
                }
            }
        }

        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $data = [];
        $colors = ['#FF5733', '#28A745', '#FFC300', '#1E90FF', '#8A2BE2']; // Example colors for each product

        foreach ($monthlyData as $productName => $quantities) {
            $monthlyQuantities = [];
            for ($month = 1; $month <= 12; $month++) {
                $monthlyQuantities[] = $quantities[$month] ?? 0;
            }
            $data[] = $monthlyQuantities;
        }

        $chart = $this->chart->barChart()
            ->setXAxis($labels)
            ->setHeight(300)
            ->setWidth(600);

        foreach ($data as $index => $quantities) {
            $chart->addData(array_keys($monthlyData)[$index], $quantities);
        }

        return $chart->setColors($colors);
    }
}

