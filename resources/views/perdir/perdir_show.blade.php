@extends('layouts.base')
@section('content')
<div class="container-fluid">

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
      @if(Session::has('alert-success'))
      <div class="alert alert-success">
        <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
      </div>
      @endif
      <h2 class="card-title"><b>{{ $perdir->nomor }} | {{ $perdir->nama }}</b></h2>
      <br>
      <div class="col-md-12 form-group row">
        <label for="" class="col-md-2"><b>Tanggal Terbit: </b></label>
        <div class="col-md-10">
          <p>{{ date('d-M-Y', strtotime($perdir->tanggal_terbit)) }}</p>
        </div>

        <label for="" class="col-md-2"><b>Area: </b></label>
        <div class="col-md-10">
          <p>{{ $perdir->modelArea->nama }}</p>
        </div>

        <label for="" class="col-md-2"><b>Jenis: </b></label>
        <div class="col-md-10">
          <p>{{ $perdir->modelPerdirJenis->nama }}</p>
        </div>

        <label for="" class="col-md-2"><b>Status: </b></label>
        <div class="col-md-10">
          @if ( $perdir->is_active === 1)
          <p>Berlaku</p>
          @elseif ( $perdir->is_active === 0)
          <p>Tidak Berlaku</p>
          @else
          <p>Status Undefined</p>
          @endif
        </div>
        <label for="" class="col-md-2"><b>Perihal: </b></label>
        <div class="col-md-10">
          <p>{{ $perdir->modelPerdirDetail->perihal }}</p>
        </div>

        <label for="" class="col-md-2"><b>Download: </b></label>
        <div class="col-md-10">
          <a href="#"><i class="fas fa-file-pdf fa-2x"></i></a>
          <a href="#"><i class="fas fa-file-word fa-2x"></i></a>
          <a href="#"><i class="fas fa-file-powerpoint fa-2x"></i></a>
        </div>
      </div>
      <hr>

      <h2 class="card-title"><b>Peraturan Terkait</b></h2>

      <div class="card shadow mb-4">
        <a href="#cardMencabut" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="cardMencabut">
          <h6 class="m-0 font-weight-bold text-primary">Mencabut Peraturan</h6>
        </a>
        <div class="collapse show" id="cardMencabut">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-condensed input-sm" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Tanggal Terbit</th>
                    <th>Perihal</th>
                    <th>Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PER.U/KO.104/VI/1/KA-2017</td>
                    <td>ORTALA LALALALAA</td>
                    <td>06-Jul-2018</td>
                    <td>Pembentukan Produk Hukum Perusahaan</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
