@extends('layouts.master')
@section('title', 'Tambah Data Area')
@section('content')
<div class="container-fluid">
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
      <h1 class="h3 mb-4 text-gray-800 text-center">Tambah Data Area</h1>
      <form class="user" action="{{ route('masterArea.store') }}" method="post">
        @csrf
        <div class="form-group row">
          <label for="kode" class="col-md-4 col-form-label text-md-right">{{ __('Kode') }}</label>
          <div class="col-md-6">
            <input id="kdoe" type="text" class="form-control{{ $errors->has('kode') ? ' is-invalid' : '' }}" name="kode" value="{{ old('kode') }}" required>
            @if ($errors->has('kode'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('kode') }}</strong>
            </span>
            @endif
          </div>
        </div>

        <div class="form-group row">
          <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>
          <div class="col-md-6">
            <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required>
            @if ($errors->has('nama'))
            <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('nama') }}</strong>
            </span>
            @endif
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
