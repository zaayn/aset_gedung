@extends('layouts.master')

@section('content_header') 
  <div class="col-md-12">
      <div class="panel block">
          <div class="panel-body">
              <h1>Kelola Ruang</h1>
              <ol class="breadcrumb">
                  <li><a href="{{asset('/admin/tambahadmin')}}"></i>Ruang</a></li>
                  <li class="active">Tambah Ruang</li>
              </ol>
          </div>
      </div>
  </div>
@endsection

@section('content')
 <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Tambah Ruang</h3></div>
          <div class="panel-body">
            @include('layouts.shared.components.alert') 
            <form action="{{route('store.ruang')}}" method="post">
                {{ csrf_field() }} 

                <div class="form-group">
                    <label>Gedung :</label>
                    <div>
                        <select class="form-control select2-A" name="g_id" required>
                            <option></option>
                        @foreach($gedungs as $gedung)
                            <option value="{{ $gedung->g_id }}">{{ $gedung->g_nama }} - {{$gedung->kampus->k_nama}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label>Nama Ruang :</label>
                  <div><input type="text" class="form-control"  name="r_nama" required></div>
                </div>
				<div class="form-group">
                  <label>Lokasi Ruang :</label>
                  <div><input type="text" class="form-control"  name="r_lokasi" required></div>
				</div>

                <button type="submit" class="btn btn-primary ">Submit</button>
                <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="/kampus" class="btn btn-secondary"> Cancel</a>
            </form>
            

        </div>
      </div>
    </div>
</div>
@endsection
@section('js')
<script>
 $(".select2-A").select2({
      placeholder: "Pilih Gedung",
      allowClear: true
    });
</script>
@endsection


