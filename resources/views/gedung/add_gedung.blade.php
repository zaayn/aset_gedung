@extends('layouts.master')

@section('content_header') 
  <div class="col-md-12">
      <div class="panel block">
          <div class="panel-body">
              <h1>Kelola Gedung</h1>
              <ol class="breadcrumb">
                  <li><a href="{{asset('/admin/tambahadmin')}}"></i>Gedung</a></li>
                  <li class="active">Tambah Gedung</li>
              </ol>
          </div>
      </div>
  </div>
@endsection

@section('content')
 <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Tambah Gedung</h3></div>
          <div class="panel-body">
            @include('layouts.shared.components.alert') 
            <form action="{{route('store.gedung')}}" method="post">
                {{ csrf_field() }} 

                <div class="form-group">
                    <label>Kampus :</label>
                    <div>
                        <select class="form-control select2-A" name="k_id" required>
                            <option></option>
                        @foreach($kampuses as $kampus)
                            <option value="{{ $kampus->k_id }}">{{ $kampus->k_nama }}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                  <label>Nama Gedung :</label>
                  <div><input type="text" class="form-control"  name="g_nama" required></div>
                </div>
				<div class="form-group">
                  <label>Lokasi gedung :</label>
                  <div><input type="text" class="form-control"  name="g_lokasi" required></div>
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
      placeholder: "Pilih Kampus",
      allowClear: true
    });
</script>
@endsection


