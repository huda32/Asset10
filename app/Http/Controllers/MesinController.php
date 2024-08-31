<?php

namespace App\Http\Controllers;

use App\Models\Gedung;
use App\Models\Jenis_mesin;
use App\Models\Kategori_mesin;
use App\Models\Merk_mesin;
use App\Models\Mesin;
use App\Models\Status;
use App\Models\Teknisi_mesin;
use Illuminate\Http\Request;

class MesinController extends Controller
{
    function index(){
        $mesins = Mesin::all(); 
        // $gedungs = Gedung::all();
        // $merk_mesins = Merk_mesin::all();
        // $jenis_mesins = Jenis_mesin::all();
        // $kategori_mesins = Kategori_mesin::all();
        // $statuses = Status::all();
        // dd($statuses);
        return view('produksi.mesin.index',compact(['mesins']));
    }
    function create(){

        $mesins = Mesin::all(); 
        $gedungs = Gedung::all();
        $merk_mesins = Merk_mesin::all();
        $jenis_mesins = Jenis_mesin::all();
        $kategori_mesins = Kategori_mesin::all();
        $statuses = Status::all();
        $teknisi_mesins = Teknisi_mesin::all();

       return view('produksi.mesin.create',compact(['mesins','gedungs','merk_mesins','jenis_mesins',
        'kategori_mesins','statuses', 'teknisi_mesins']));
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'nama_mesin' => 'required',
            'type_mesin' => 'required',
            'merk_mesin_id' => 'required',
            
        ]);
        
        Mesin::create([
            'nama_mesin' => $request->nama_mesin,
            'merk_mesin_id' => $request->merk_mesin_id,
            'type_mesin' => $request->type_mesin,
            'no_mesin' => $request->no_mesin,
            'sn_mesin' => $request->sn_mesin,
            'gedung_id' => $request->gedung_id,
            'kw' => $request->kw,
            'tahun' => $request->tahun,
            'jenis_mesin_id' => $request->jenis_mesin_id,
            'kategori_mesin_id' => $request->kategori_mesin_id,
            'status_id' => $request->status_id,
            'teknisi_mesin_id' => $request->teknisi_mesin_id,
        ]);
        return redirect('/mesin')->with('success','Data Mesin Berhasil Ditambahkan');
    }
    public function show($id){
        $mesin = Mesin::find($id);
       return view('produksi.mesin.show',compact('mesin'));
    }
}
