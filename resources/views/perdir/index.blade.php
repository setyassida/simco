@extends('layouts.master')

@section('title', 'Peraturan Direksi')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><b>Peraturan Direksi</b></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{ url('perdir/create') }}" class="btn btn-sm btn-success btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah</span>
      </a>
    </div>
    <div class="card-body">
      @if(Session::has('alert-success'))
      <div class="alert alert-success">
        <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
      </div>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered table-condensed input-sm" id="perdirTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Nama</th>
              <th>Tanggal Terbit</th>
              <th>Perihal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($datas as $data)
            <tr>
              <td>{{ $data->nomor }}</td>
              <td>{{ $data->nama }}</td>
              <td>{{ date('d-M-y', strtotime($data->tanggal_terbit)) }}</td>
              <td>{{ $data->modelPerdirDetail->perihal }}</td>
              <td>
                <a href="{{ route('perdir.show',$data->id) }}" class=" btn btn-xs btn-info">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('perdir.edit',$data->id) }}" class=" btn btn-xs btn-primary">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="{{ route('perdir.edit',$data->id) }}" class=" btn btn-xs btn-primary">
                  <i class="fas fa-trash"></i>
                </a>
                <!-- <form action="{{ route('perdir.destroy', $data->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <a href="{{ route('perdir.edit',$data->id) }}" class=" btn btn-xs btn-primary">
                <i class="fas fa-trash"></i>
              </a>
              <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
            </form> -->
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <hr>
</div>
</div>
</div>
@endsection

@section('page_script')
<script type="text/javascript">
jQuery(document).ready(function() {
  $(function () {
    $('#perdirTable').dataTable( {
      "columnDefs": [
        { "width": "10%", "targets": 4 }
      ]
    } );
  });
});
</script>
@endsection
