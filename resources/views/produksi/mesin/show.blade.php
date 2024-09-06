@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-6">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mesin</h6>
          </div>
          <div class="card-body">             
                <ul class="list-group">
                  
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Nama Mesin <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->nama_mesin}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Merk Mesin <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->merk_mesin->merk_mesin}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Type Mesin <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->type_mesin}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  No Mesin <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->no_mesin}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Serial Number Mesin <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->sn_mesin}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Lokasi <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->gedung->nama_gedung}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  KW <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->kw}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Tahun <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->tahun}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Jenis <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->jenis_mesin->jenis_mesin}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Kategori Mesin <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->kategori_mesin->kategori_mesin}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Kondisi Mesin <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->status->status}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Teknisi <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->teknisi_mesin->nama_teknisi}}</div>
                    </li>
                    <li class="list-group-item border-0">
                        <h4 class="small font-weight-bold">  Nomer Teknisi <span class="float-right"></span></h4>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $mesin->teknisi_mesin->nomer}}</div>
                    </li>

                    
                </ul>
            
          </div>
        </div>

        <!-- Color System -->
       
           
       
    </div>
</div>
@endsection