@extends('layouts.master')

@section('content')


    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
      <a href="/mesin/create" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> ADD</a>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-sm" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mesin</th>
                        <th>Merk</th>
                        <th>Type</th>
                        <th>No Mesin</th>
                        <th>SN Mesin</th>
                        <th>Lokasi</th>
                        <th>KW</th>
                        <th>Tahun</th>
                        <th>Jenis</th>
                        <th>Kategori Mesin</th>
                        <th>Kondisi Mesin</th>
                        <th>Teknisii</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                    @foreach ($mesins as $mesin)
             
                        <tr>
                          <td>{{ $nomer++}}</td>
                            <td><a href="/mesin/{{$mesin->id}}">{{ $mesin->nama_mesin}}</a></td>
                            <td>{{ $mesin->merk_mesin->merk_mesin}}</td>
                            <td>{{ $mesin->type_mesin}}</td>
                            <td>{{ $mesin->no_mesin}}</td>
                            <td>{{ $mesin->sn_mesin}}</td>
                            <td>{{ $mesin->gedung->nama_gedung}}</td>
                            <td>{{ $mesin->kw}}</td>
                            <td>{{ $mesin->tahun}}</td>
                            <td>{{ $mesin->jenis_mesin->jenis_mesin}}</td>
                            <td>{{ $mesin->kategori_mesin->kategori_mesin}}</td>
                            <td>{{ $mesin->status->status}}</td>
                            <td>{{ $mesin->teknisi_mesin->nama_teknisi}}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
              </div>
             
    </div>
  </div>
@endsection