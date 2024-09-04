<?php

namespace App\Charts;

use App\Models\Mesin;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class GedungMesinChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $KategoriMesin = Mesin::get();
        $data = [
            $KategoriMesin->where('gedung_id',1)->count(),
            $KategoriMesin->where('gedung_id',2)->count(),
            $KategoriMesin->where('gedung_id',3)->count(),
            $KategoriMesin->where('gedung_id',4)->count(),
            $KategoriMesin->where('gedung_id',5)->count(),
            $KategoriMesin->where('gedung_id',6)->count(),
            $KategoriMesin->where('gedung_id',9)->count(),
            
        ];
        $label = [
            'Gedung A',
            'Gedung B',
            'Gedung C',
            'Gedung D',
            'Gedung E',
            'Gedung F',
            'Workshop',
          
        ];
        return $this->chart->barChart()
            ->setTitle('Data Chart Mesin Tiap Gedung P5')
            ->setSubtitle('Pabrik 5 Pekalongan')
            ->addData('jumlah',$data)
            ->setLabels($label);
    }
}
