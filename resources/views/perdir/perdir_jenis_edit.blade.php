@extends('layouts.base')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Edit Jenis Peraturan Direksi</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Jenis Peraturan Direks</h6>
    </div>
    <div class="card-body">
      @foreach($data as $datas)
      <form class="user" action="{{ route('perdirjenis.update', $datas->id) }}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group row">
          <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Peraturan Direksi') }}</label>
          <div class="col-md-6">
            <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ $datas->nama }}" required>
          </div>
        </div>
        <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
            <button type="reset" class="btn btn-danger">
              {{ __('Cancel') }}
            </button>
            <button type="submit" class="btn btn-primary">
              {{ __('Submit') }}
            </button>
          </div>
        </div>
      </form>
      @endforeach
    </div>
  </div>
</div>

@endsection
