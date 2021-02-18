@extends('layouts.master')

@section('content_header') 
<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Kelola Ruang</h3>
            <p class="animated fadeInDown">
                Home <span class="fa-angle-right fa"></span> Ruang
            </p>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-12 padding-0">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
              @include('layouts.shared.components.alert')   
              <div style="float:right; margin-bottom:10px;">
                <a href="{{asset('/add_ruang')}}" class="btn btn-success btn-sm" >Tambah Ruang</a>
              </div>          
              <hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">
              <div class="responsive-table">
                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th>ID</th>
                    <th>Nama Kampus</th>
                    <th>Nama Gedung</th>
                    <th>Nama Ruang</th>
                    <th>Tempat Ruang</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach($ruangs as $ruang)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $ruang->gedung->kampus->k_nama }}</td>
                      <td>{{ $ruang->gedung->g_nama }}</td>
                      <td>{{ $ruang->r_nama }}</td>
                      <td>{{ $ruang->r_lokasi }}</td>
                      <td>
                        <a href="{{route('edit.ruang',$ruang->r_id)}}" class="btn btn-info btn-sm">
                          <span class="fa fa-pencil"></span>
                        </a>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="{{route('delete.ruang',$ruang->r_id)}}" class="btn btn-danger btn-sm">
                          <span class="fa fa-trash"></span>
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>        
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection