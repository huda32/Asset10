<?php

namespace App\Charts;

use App\Models\Mesin;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class KategoriMesinChart
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
            $KategoriMesin->where('kategori_mesin_id',1)->count(),
            $KategoriMesin->where('kategori_mesin_id',2)->count(),
            $KategoriMesin->where('kategori_mesin_id',3)->count(),
        ];
        $label = [
            'Mesin Kecil',
            'Mesin Sedang',
            'Mesin Besar'
        ];

        return $this->chart->pieChart()
            ->setTitle('Data Chart Kategori Mesin')
            ->setSubtitle('Pabrik 5 Pekalongan')
            ->addData($data)
            ->setLabels($label);
    }
}
