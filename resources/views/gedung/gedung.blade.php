@extends('layouts.master')

@section('content_header') 
<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Gedung</h3>
            <p class="animated fadeInDown">
                Home <span class="fa-angle-right fa"></span> Gedung
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
                <a href="{{asset('/add_gedung')}}" class="btn btn-success btn-sm" >Tambah Gedung</a>
              </div>          
              <hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">
              <div class="responsive-table">
                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th>ID</th>
                    <th>Kampus</th>
                    <th>Nama Gedung</th>
                    <th>Lokasi Gedung</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach($gedungs as $gedung)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $gedung->kampus->k_nama }}</td>
                      <td>{{ $gedung->g_nama }}</td>
                      <td>{{ $gedung->g_lokasi }}</td>
                      <td>
                        <a href="{{route('edit.gedung',$gedung->g_id)}}" class="btn btn-info btn-sm">
                          <span class="fa fa-pencil"></span>
                        </a>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="{{route('delete.gedung',$gedung->g_id)}}" class="btn btn-danger btn-sm">
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