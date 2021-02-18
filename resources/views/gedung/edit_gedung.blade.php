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
            @foreach($gedungs as $gedung)
            <form action="{{route('update.gedung', $gedung->g_id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Penanggung Jawab</label>
                    <select class="form-control select2-A" name="k_id" required>
                        <option></option>
                        @foreach($kampuses as $kampus)
                            <option value="{{ $kampus->k_id }}">{{ $kampus->k_nama }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>Nama Gedung :</label>
                  <div><input id="g_nama" type="text" class="form-control" name="g_nama" value="{{ $gedung->g_nama }}" required autofocus></div>
                </div>
				<div class="form-group">
                  <label>Lokasi Gedung :</label>
                  <div><input id="g_lokasi" type="text" class="form-control" name="g_lokasi" value="{{ $gedung->g_lokasi }}" required></div>
				</div>

                <button type="submit" class="btn btn-primary ">Submit</button>
                <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="/gedung" class="btn btn-secondary"> Cancel</a>
            </form>
            @endforeach

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