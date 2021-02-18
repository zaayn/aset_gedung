@extends('layouts.master')

@section('content_header') 
<div class="panel box-shadow-none content-header">
    <div class="panel-body">
        <div class="col-md-12">
            <h3 class="animated fadeInLeft">Color</h3>
            <p class="animated fadeInDown">
                Ui Element <span class="fa-angle-right fa"></span> Color
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
                <a href="{{asset('/add_user')}}" class="btn btn-success btn-sm" >Tambah user</a>
              </div>          
              <hr style="border: solid #ddd; border-width: 1px 0 0; clear: both; margin: 22px 0 21px; height: 0;">
              <div class="responsive-table">
                <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        <a href="{{route('edit.user',$user->email)}}" class="btn btn-info btn-sm">
                          <span class="fa fa-pencil"></span>
                        </a>
                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')" href="{{route('delete.user',$user->email)}}" class="btn btn-danger btn-sm">
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