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
            <h6 class="m-0 font-weight-bold text-primary">Data Mesin</h6>
        </div>
        <div class="card-body">
            {!! $chart_merk->container()!!}
          </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Mesin</h6>
        </div>
        <div class="card-body">
          {!! $chart_kategori->container()!!}
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Mesin</h6>
        </div>
        <div class="card-body">
          {!! $chart_gedung->container()!!}
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Mesin</h6>
        </div>
        <div class="card-body">
          {!! $chart_status->container()!!}
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Mesin</h6>
        </div>
        <div class="card-body">
          {!! $chart_jenis->container()!!}
        </div>
      </div>

    <script src="{{ $chart_merk->cdn() }}"></script>
        {{ $chart_merk->script()}}
    <script src="{{ $chart_kategori->cdn() }}"></script>
        {{ $chart_kategori->script()}}
    <script src="{{ $chart_gedung->cdn() }}"></script>
        {{ $chart_gedung->script()}}
    <script src="{{ $chart_status->cdn() }}"></script>
        {{ $chart_status->script()}}
    <script src="{{ $chart_jenis->cdn() }}"></script>
        {{ $chart_jenis->script()}}
@endsection