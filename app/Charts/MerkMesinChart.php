<?php

namespace App\Charts;

use App\Models\Mesin;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MerkMesinChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $KategoriMesin = Mesin::get();
        $data = [
            $KategoriMesin->where('merk_mesin_id',1)->count(),
            $KategoriMesin->where('merk_mesin_id',2)->count(),
            $KategoriMesin->where('merk_mesin_id',3)->count(),
            $KategoriMesin->where('merk_mesin_id',4)->count(),
            $KategoriMesin->where('merk_mesin_id',5)->count(),
            $KategoriMesin->where('merk_mesin_id',6)->count(),
            $KategoriMesin->where('merk_mesin_id',7)->count(),
            $KategoriMesin->where('merk_mesin_id',8)->count(),
            $KategoriMesin->where('merk_mesin_id',9)->count(),
            $KategoriMesin->where('merk_mesin_id',10)->count(),
            $KategoriMesin->where('merk_mesin_id',11)->count(),
            $KategoriMesin->where('merk_mesin_id',12)->count(),
            $KategoriMesin->where('merk_mesin_id',13)->count(),
            $KategoriMesin->where('merk_mesin_id',14)->count(),
            $KategoriMesin->where('merk_mesin_id',15)->count(),
            $KategoriMesin->where('merk_mesin_id',16)->count(),
            $KategoriMesin->where('merk_mesin_id',17)->count(),
            $KategoriMesin->where('merk_mesin_id',18)->count(),
            $KategoriMesin->where('merk_mesin_id',19)->count(),
            $KategoriMesin->where('merk_mesin_id',20)->count(),
            $KategoriMesin->where('merk_mesin_id',21)->count(),
            $KategoriMesin->where('merk_mesin_id',22)->count(),
            $KategoriMesin->where('merk_mesin_id',23)->count(),
            $KategoriMesin->where('merk_mesin_id',24)->count(),
            $KategoriMesin->where('merk_mesin_id',25)->count(),
            $KategoriMesin->where('merk_mesin_id',26)->count(),
            $KategoriMesin->where('merk_mesin_id',27)->count(),
            $KategoriMesin->where('merk_mesin_id',28)->count(),
            $KategoriMesin->where('merk_mesin_id',29)->count(),
            $KategoriMesin->where('merk_mesin_id',30)->count(),
            $KategoriMesin->where('merk_mesin_id',31)->count(),
            $KategoriMesin->where('merk_mesin_id',32)->count(),
            $KategoriMesin->where('merk_mesin_id',33)->count(),
            $KategoriMesin->where('merk_mesin_id',34)->count(),
            $KategoriMesin->where('merk_mesin_id',35)->count(),
            $KategoriMesin->where('merk_mesin_id',36)->count(),
            $KategoriMesin->where('merk_mesin_id',37)->count(),
            $KategoriMesin->where('merk_mesin_id',38)->count(),
            $KategoriMesin->where('merk_mesin_id',39)->count(),
            $KategoriMesin->where('merk_mesin_id',40)->count(),
        ];
        $label = [
            'Kenichi',
            'Samsung',
            'Yadon',
            'Amanda',
            'Komatsu',
            'Ex Devita',
            'Otano',
            'Toyama',
            'West Lake',
            'AKS',
            'Crobtp',
            'Fokus',
            'Bosch',
            'Tsuzumi',
            'West Air',
            'Boarke',
            'Jeshl',
            'Zk Machinery',
            'Nanxing',
            'AKS MD',
            'Vitap',
            'KDT',
            'Hua Hua',
            'Rulong',
            'Yoritsu',
            'Mactec',
            'Pazto',
            'NRT PRO',
            'RYU',
            'K Machine',
            'Maspion',
            'Rakitan',
            'China',
            'Tanpa Merk',
            'Yubao',
            'MZ',
            'Rouding Multibor',
            'BT',
            'FBR',
            'Wpl Weideli',
            

        ];
        

        return $this->chart->horizontalBarChart()
            ->setTitle('Data Chart Merk Mesin')
            ->setSubtitle('Pabrik 5 Pekalongan')
            ->setWidth(1000)
            ->setHeight(800)
            ->setColors(['#FFC107', '#D32F2F'])
            ->addData('Jumlah', $data)
            // ->addData('Jumlah', [7, 3, 8, 2, 6, 4])
            ->setXAxis($label);
    }
}
