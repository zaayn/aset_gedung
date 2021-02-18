@extends('layouts.master')

@section('content_header') 
  <div class="col-md-12">
      <div class="panel block">
          <div class="panel-body">
              <h1>Kelola Admin</h1>
              <ol class="breadcrumb">
                  <li><a href="{{asset('/admin/tambahadmin')}}"></i>kampus</a></li>
                  <li class="active">Tambah Kampus</li>
              </ol>
          </div>
      </div>
  </div>
@endsection

@section('content')
 <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Tambah Kampus</h3></div>
          <div class="panel-body">
            @include('layouts.shared.components.alert') 
            <form action="{{route('store.kampus')}}" method="post">
                {{ csrf_field() }} 

                <div class="form-group">
                    <label>Penanggung Jawab :</label>
                    <div>
                        <select class="form-control" name="email">
                        @foreach($users as $user)
                            <option value="{{ $user->email }}">{{ $user->name }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label>Nama Kampus :</label>
                  <div><input type="text" class="form-control"  name="k_nama" required></div>
                </div>
				<div class="form-group">
                  <label>Lokasi Kampus :</label>
                  <div><input type="text" class="form-control"  name="k_lokasi" required></div>
				</div>

                <button type="submit" class="btn btn-primary ">Submit</button>
                <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="/kampus" class="btn btn-secondary"> Cancel</a>
            </form>
            

        </div>
      </div>
    </div>
</div>
@endsection


