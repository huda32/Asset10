<?php

namespace App\Charts;

use App\Models\Mesin;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class JenisMesinChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\HorizontalBar
    {
        $JenisMesin = Mesin::get();
        $data = [
            $JenisMesin->where('jenis_mesin_id',1)->count(),
            $JenisMesin->where('jenis_mesin_id',2)->count(),
            $JenisMesin->where('jenis_mesin_id',3)->count(),
            $JenisMesin->where('jenis_mesin_id',4)->count(),
            $JenisMesin->where('jenis_mesin_id',5)->count(),
            $JenisMesin->where('jenis_mesin_id',6)->count(),
            $JenisMesin->where('jenis_mesin_id',7)->count(),
            $JenisMesin->where('jenis_mesin_id',8)->count(),
            $JenisMesin->where('jenis_mesin_id',9)->count(),
            $JenisMesin->where('jenis_mesin_id',10)->count(),
            $JenisMesin->where('jenis_mesin_id',11)->count(),
            $JenisMesin->where('jenis_mesin_id',12)->count(),
            $JenisMesin->where('jenis_mesin_id',13)->count(),
            $JenisMesin->where('jenis_mesin_id',14)->count(),
            $JenisMesin->where('jenis_mesin_id',15)->count(),
            $JenisMesin->where('jenis_mesin_id',16)->count(),
            $JenisMesin->where('jenis_mesin_id',17)->count(),
            $JenisMesin->where('jenis_mesin_id',18)->count(),
            $JenisMesin->where('jenis_mesin_id',19)->count(),
            $JenisMesin->where('jenis_mesin_id',20)->count(),
            $JenisMesin->where('jenis_mesin_id',21)->count(),
            $JenisMesin->where('jenis_mesin_id',22)->count(),
            $JenisMesin->where('jenis_mesin_id',23)->count(),
            $JenisMesin->where('jenis_mesin_id',24)->count(),
            $JenisMesin->where('jenis_mesin_id',25)->count(),
            $JenisMesin->where('jenis_mesin_id',26)->count(),
            $JenisMesin->where('jenis_mesin_id',27)->count(),
            $JenisMesin->where('jenis_mesin_id',28)->count(),
            $JenisMesin->where('jenis_mesin_id',29)->count(),
            $JenisMesin->where('jenis_mesin_id',30)->count(),
            $JenisMesin->where('jenis_mesin_id',31)->count(),
            $JenisMesin->where('jenis_mesin_id',32)->count(),
            $JenisMesin->where('jenis_mesin_id',33)->count(),
            $JenisMesin->where('jenis_mesin_id',34)->count(),
            $JenisMesin->where('jenis_mesin_id',35)->count(),
            $JenisMesin->where('jenis_mesin_id',36)->count(),
            $JenisMesin->where('jenis_mesin_id',37)->count(),
            $JenisMesin->where('jenis_mesin_id',38)->count(),
            $JenisMesin->where('jenis_mesin_id',39)->count(),
            $JenisMesin->where('jenis_mesin_id',40)->count(),
            $JenisMesin->where('jenis_mesin_id',41)->count(),
            $JenisMesin->where('jenis_mesin_id',42)->count(),
            $JenisMesin->where('jenis_mesin_id',43)->count(),
        ];
        $label = [
            'Asah',
            'Bandsaw',
            'Bending Pipa',
            'Blower',
            'Bor Duduk',
            'Bor Tap',
            'Boring',
            'Drying',
            'Burner',
            'Cold Press',
            'Conveyor',
            'Cross Cut',
            'Cutting',
            'Mesin Cutting',
            'Cutting Wheel',
            'Mesin Cutting',
            'Dryer',
            'Dust Collector',
            'Edging',
            'Finishing',
            'Hoist',
            'Jointer',
            'Kompressor',
            'Laminasi',
            'Las Mig',
            'Las Robot',
            'Mesin Jahit',
            'Pencacah MDF',
            'Milling',
            'Planner',
            'Router',
            'Sanding',
            'Shearing',
            'Sirkle',
            'Spray Booth',
            'Spray Tank',
            'Stabilizer',
            'Straping Band',
            'Table Lift',
            'Table Saw',
            'Distribusi Listrik',
            'Bending Plat',
            'Bubut',

        ];
        
        return $this->chart->horizontalBarChart()
            ->setTitle('Data Chart Jenis Mesin ')
            ->setSubtitle('Pabrik 5 Pekalongan')
            ->setColors(['#D32F2F'])
            
            ->setHeight(800)
            ->addData('Jumlah', $data)
            // ->addData('Boston', [7, 3, 8, 2, 6, 4])
            ->setXAxis($label);
    }
}
