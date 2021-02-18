@extends('layouts.master')

@section('content_header') 
  <div class="col-md-12">
      <div class="panel block">
          <div class="panel-body">
              <h1>Edit Ruang</h1>
              <ol class="breadcrumb">
                  <li><a href="{{asset('/admin/home')}}"></i> Ruang</a></li>
                  <li class="active">Edit Ruang</li>
              </ol>
          </div>
      </div>
  </div>
@endsection

@section('content')
 <div class="col-md-12 top-20 padding-0">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading"><h3>Edit Ruang</h3></div>
          <div class="panel-body">
            @foreach($ruangs as $ruang)
            <form action="{{route('update.ruang', $ruang->r_id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Nama Gedung</label>
                    <select class="form-control select2-A" name="g_id" required>
                        <option></option>
                        @foreach($gedungs as $gedung)
                            <option value="{{ $gedung->g_id }}">{{ $gedung->g_nama }} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>Nama Ruang :</label>
                  <div><input id="r_nama" type="text" class="form-control" name="r_nama" value="{{ $ruang->r_nama }}" required autofocus></div>
                </div>
				<div class="form-group">
                  <label>Tempat Ruang :</label>
                  <div><input id="r_lokasi" type="text" class="form-control" name="r_lokasi" value="{{ $ruang->r_lokasi }}" required></div>
				</div>

                <button type="submit" class="btn btn-primary ">Submit</button>
                <a onclick="return confirm('Perubahan anda belum disimpan. Tetap tinggalkan halaman ini ?')" href="/ruang" class="btn btn-secondary"> Cancel</a>
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
      placeholder: "Pilih Gedung",
      allowClear: true
    });
</script>
@endsection