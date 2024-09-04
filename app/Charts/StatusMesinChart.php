<?php

namespace App\Charts;

use App\Models\Mesin;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class StatusMesinChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $KategoriMesin = Mesin::get();
        $data = [
            $KategoriMesin->where('status_id',1)->count(),
            $KategoriMesin->where('status_id',2)->count(),
            $KategoriMesin->where('status_id',3)->count(),
            $KategoriMesin->where('status_id',4)->count(),
        ];
        $label = [
            'Aktif',
            'Standby',
            'Proses Perbaikan',
            'Rusak Total',
            
        ];
        return $this->chart->pieChart()
            ->setTitle('Status Mesin')
            ->setSubtitle('Pabrik 5 Pekalongan')
            ->addData($data)
            ->setLabels($label);
    }
}
