@extends('layouts.master')

@section('content_header') 
  <div class="col-md-12">
      <div class="panel block">
          <div class="panel-body">
              <h1>Edit Kampus</h1>
              <ol class="breadcrumb">
                  <li><a href="{{asset('/admin/home')}}"></i> Kampus</a></li>
                  <li class="active">Edit Kampus</li>
              </ol>
          </div>
      </div>
  </div>
@endsection

@section('content')
 <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Edit Kampus</h3></div>
          <div class="panel-body">
            @foreach($kampus as $camp)
            <form action="{{route('update.kampus', $camp->k_id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Penanggung Jawab</label>
                    <select class="form-control select2" name="kode_customer">
                        {{-- <option></option> --}}
                        @foreach($users as $user)
                            <option value="{{ $user->email }}">{{ $user->name }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>Nama Kampus :</label>
                  <div><input id="k_nama" type="text" class="form-control" name="k_nama" value="{{ $camp->k_nama }}" required autofocus></div>
                </div>
				<div class="form-group">
                  <label>Lokasi Kampus :</label>
                  <div><input id="k_lokasi" type="text" class="form-control" name="k_lokasi" value="{{ $camp->k_lokasi }}" required></div>
				</div>

                <button type="submit" class="btn btn-primary ">Submit</button>
                <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="{{('/superadmin/user')}}" class="btn btn-secondary"> Cancel</a>
            </form>
            @endforeach

        </div>
      </div>
    </div>
</div>
@endsection