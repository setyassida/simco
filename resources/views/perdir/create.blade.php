@extends('layouts.master')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Peraturan Direksi</h1> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-chevron-left"></i>
        </span>
        <span class="text">Back</span>
      </a>
    </div>
    <div class="card-body">
      <h1 class="h3 mb-4 text-gray-800 text-center">Tambah Data Peraturan Direksi</h1>
      <form class="user" action="{{ route('perdir.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
          <label for="nomor" class="col-md-4 col-form-label text-md-right">{{ __('Nomor') }}</label>
          <div class="col-md-6">
            <input id="nomor" type="text" class="form-control{{ $errors->has('nomor') ? ' is-invalid' : '' }}" name="nomor" value="{{ old('nomor') }}" required>
            @if ($errors->has('nomor'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('nomor') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>
          <div class="col-md-6">
            <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required>
            @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('nama') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="tanggal_terbit" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Terbit') }}</label>
          <div class="col-md-6">
            <div class="input-group date" id="tanggal_terbit" data-target-input="nearest">
              <input name="tanggal_terbit" type="text" class="form-control datetimepicker-input" data-target="#tanggal_terbit"/>
              <div class="input-group-append" data-target="#tanggal_terbit" data-toggle="datetimepicker">
                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="is_active">Masa Berlaku</label>
          <div class="col-md-6">
            <select name="is_active" class="form-control" id="is_active">
              <option value="1">Berlaku</option>
              <option value="0">Tidak Berlaku</option>
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="area">Area</label>
          <div class="col-md-6">
            <select name="area" class="form-control" id="area">
              @foreach($areas as $area)
              <option value="{{ $area->id }}">{{ $area->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="jenis">Jenis</label>
          <div class="col-md-6">
            <select name="jenis" class="form-control" id="jenis">
              @foreach($perdir_jenis as $jenis)
              <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="jenis">Perdir Induk</label>
          <div class="col-md-6">
            <select name="perdir" class="form-control" id="perdir">
              <option value="">Choose</option>
              @foreach($perdirs as $perdir)
              <option value="{{ $perdir->id }}">{{ $perdir->nomor }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="perihal">Perihal</label>
          <div class="col-md-6">
            <textarea name="perihal" class="form-control" id="perihal" rows="3"></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="file_pdf">File PDF</label>
          <div class="col-md-6">
            <div class="custom-file">
              <input name="file_pdf" type="file" class="custom-file-input" id="file_pdf">
              <label class="custom-file-label" for="file_pdf">Choose file</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="file_doc">File DOC</label>
          <div class="col-md-6">
            <div class="custom-file">
              <input name="file_doc" type="file" class="custom-file-input" id="file_doc">
              <label class="custom-file-label" for="file_doc">Choose file</label>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-md-4 col-form-label text-md-right" for="file_ppt">File PPT</label>
          <div class="col-md-6">
            <div class="custom-file">
              <input name="file_ppt" type="file" class="custom-file-input" id="file_ppt">
              <label class="custom-file-label" for="file_ppt">Choose file</label>
            </div>
          </div>
        </div>

        <br>
        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-sm btn-success">
              {{ __('Submit') }}
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

</div>
@endsection
@section('page_script')

<script type="text/javascript">
jQuery(document).ready(function() {
  $(function () {
    $('#tanggal_terbit').datetimepicker({
      format: 'Y-MM-D',
    });

    $('#perdir').prop( "disabled", true );
    $('#jenis').change(function(){
      var jenis = $('#jenis').val();
      if (jenis==2) {
        $('#perdir').prop( "disabled", false );
      }else {
        $('#perdir').val("");
        $('#perdir').prop( "disabled", true );
      }
    });
  });
});
</script>
@endsection
