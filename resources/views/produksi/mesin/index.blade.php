@extends('layouts.master')

@section('content')
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Data Mesin</li>
</ol>
<div class="card mb-4">
    <div class="card-header">
        {{-- <i class="fas fa-table me-1"></i> --}}
       <a href="/mesin/create" class="btn btn-primary btn-sm">Add</a> 
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Mesin</th>
                    <th>Gedung</th>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Tahun</th>
                    <th>Pengguna</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Mesin</th>
                    <th>Gedung</th>
                    <th>Merk</th>
                    <th>Jenis</th>
                    <th>Tahun</th>
                    <th>Pengguna</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($mesins as $mesin)
                    <tr>
                        <td>{{ $mesin->id_mesin}}</td>
                        <td>{{ $mesin->id_gedung}}</td>
                        <td>{{ $mesin->id_merk}}</td>
                        <td>{{ $mesin->id_jenis_mesin}}</td>
                        <td>{{ $mesin->tahun_perolehan}}</td>
                        <td>{{ $mesin->pengguna}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection