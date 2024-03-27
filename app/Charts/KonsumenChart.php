<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class KonsumenChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setTitle('Penilaian Konsumen ')
            ->setSubtitle('Tahun 2024.')
            ->addData([20, 24, 30])
            ->setLabels(['Buruk', 'Netral', 'Baik']);
    }
}
