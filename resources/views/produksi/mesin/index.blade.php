@extends('layouts.master')
@push('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush
@section('content')

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped ">
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endpush
