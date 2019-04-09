@extends('layouts.base')
@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Tambah Jenis Peraturan Direksi</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Jenis Peraturan Direksi</h6>
    </div>
    <div class="card-body">
      <form class="user" action="{{ route('perdirjenis.store') }}" method="post">
        @csrf


        <div class="form-group row">
            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Peraturan Direksi') }}</label>

            <div class="col-md-6">
                <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('email') }}" required>

                @if ($errors->has('nama'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('nama') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Submit') }}
                </button>
            </div>
        </div>


      </form>
    </div>
  </div>

</div>

@endsection
