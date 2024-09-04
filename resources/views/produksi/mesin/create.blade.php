@extends('layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      {{-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> --}}
    </div>
  <div class="card shadow mb-4">
    <div class="card-body">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                 <li>{{ $error}}</li> 
              @endforeach
            </ul>
        </div>
      @endif
        <form action="/mesin" method="POST">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Mesin</label>
                <input name="nama_mesin" type="text" class="form-control"  placeholder="Nama Mesin">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Merk Mesin</label>
                <select class="form-control" name="merk_mesin_id">
                <option>Pilih Merk Mesin</option>
                    @foreach($merk_mesins as $merk_mesin)
                        <option value="{{ $merk_mesin->id}}">{{ $merk_mesin->merk_mesin}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Type Mesin</label>
                <input name="type_mesin" type="text" class="form-control"  placeholder="Type Mesin">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">No Mesin</label>
                <input name="no_mesin" type="text" class="form-control"  placeholder="Nomor Mesin">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Serial Number Mesin</label>
                <input name="sn_mesin" type="text" class="form-control"  placeholder="Serial Number Mesin">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Lokasi Mesin</label>
                <select class="form-control" name="gedung_id">
                <option>Lokasi Mesin</option>
                    @foreach($gedungs as $gedung)
                        <option value="{{ $gedung->id}}">{{ $gedung->nama_gedung}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">KW</label>
                <input name="kw" type="text" class="form-control"  placeholder="Kilo Watt">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Tahun</label>
                <input name="tahun" type="number" class="form-control"  placeholder="Tahun Datang">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Mesin</label>
                <select class="form-control" name="jenis_mesin_id">
                <option>Jenis Mesin</option>
                    @foreach($jenis_mesins as $jenis_mesin)
                        <option value="{{ $jenis_mesin->id}}">{{ $jenis_mesin->jenis_mesin}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kategori Mesin</label>
                <select class="form-control" name="kategori_mesin_id">
                <option>Kategori Mesin</option>
                    @foreach($kategori_mesins as $kategori_mesin)
                        <option value="{{ $kategori_mesin->id}}">{{ $kategori_mesin->kategori_mesin}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Kondisi Mesin</label>
                <select class="form-control" name="status_id">
                <option>Kondisi Mesin</option>
                    @foreach($statuses as $status)
                        <option value="{{ $status->id}}">{{ $status->status}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Vendor / Teknisi</label>
                <select class="form-control" name="teknisi_mesin_id">
                <option>Teknisi Mesin</option>
                    @foreach($teknisi_mesins as $teknisi)
                        <option value="{{ $teknisi->id}}">{{ $teknisi->nama_teknisi}} / {{$teknisi->nomer}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@endsection