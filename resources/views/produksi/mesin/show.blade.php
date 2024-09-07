@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-12">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mesin</h6>
          </div>
       
          <div class="card-body">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Nama Mesin</h4>
                        <p>{{ $mesin->nama_mesin}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Merk Mesin</h4>
                        <p>{{ $mesin->merk_mesin->merk_mesin}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Type Mesin</h4>
                        <p>{{ $mesin->nama_mesin}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">No Mesin</h4>
                        <p>{{ $mesin->no_mesin}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Serial Number</h4>
                        <p>{{ $mesin->sn_mesin}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Lokasi Mesin</h4>
                        <p>{{ $mesin->gedung->nama_gedung}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">KW</h4>
                        <p>{{ $mesin->kw}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Tahun</h4>
                        <p>{{ $mesin->tahun}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Jenis</h4>
                        <p>{{ $mesin->jenis_mesin->jenis_mesin}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Kategori Mesin</h4>
                        <p>{{ $mesin->kategori_mesin->kategori_mesin}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Kondisi Mesin</h4>
                        <p>{{ $mesin->status->status}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0 text-black-800">Teknisi Mesin</h4>
                        <p>{{ $mesin->teknisi_mesin->nama_teknisi}}</p>
                        </div>
                </div>
                <div class="col d-flex align-items-start">
                    <button class="btn btn-icon-only"><i class="fa fa-cog" aria-hidden="true"></i></button>
                        <div>
                        <h4 class="font-weight-bold mb-0">Nomer Teknisi</h4>
                        <p>{{ $mesin->teknisi_mesin->nomer}}</p>
                        </div>
                </div>
            </div>
          </div>
        </div>
    </div>
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Status Mesin</h6>
                </div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
</div>
@endsection