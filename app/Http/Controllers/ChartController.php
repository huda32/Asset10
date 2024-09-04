<?php

namespace App\Http\Controllers;

use App\Charts\GedungMesinChart;
use App\Charts\JenisMesinChart;
use App\Charts\KategoriMesinChart;
use App\Charts\MerkMesinChart;
use App\Charts\StatusMesinChart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    function index(KategoriMesinChart $kategori_mesin, MerkMesinChart $merk_mesins,
    GedungMesinChart $gedungMesinChart, StatusMesinChart $statusMesinChart, JenisMesinChart $jenisMesinChart){ 
        $chart_kategori = $kategori_mesin->build();
        $chart_merk = $merk_mesins->build();
        $chart_gedung = $gedungMesinChart->build();
        $chart_status = $statusMesinChart->build();
        $chart_jenis = $jenisMesinChart->build();

        return view('produksi.mesin.chart',compact(['chart_kategori','chart_merk','chart_gedung','chart_status', 'chart_jenis']));
    }
}
