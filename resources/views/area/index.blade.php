@extends('layouts.master')

@section('title', 'Data Area')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><b>Data Area</b></h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <a href="{{ url('masterArea/create') }}" class="btn btn-sm btn-success btn-icon-split">
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
        <table class="table table-bordered table-condensed input-sm" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Kode</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($area as $data)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $data->kode }}</td>
              <td>{{ $data->nama }}</td>
              <td class="text-center">
                <form action="{{ route('perdir.destroy', $data->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ route('perdir.show',$data->id) }}" class=" btn btn-sm btn-info"><span class="icon text-white-50">
                    <i class="fas fa-eye"></i>
                  </span></a>
                  <a href="{{ route('perdir.edit',$data->id) }}" class=" btn btn-sm btn-primary"><span class="icon text-white-50">
                    <i class="fas fa-edit"></i>
                  </span></a>
                  <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')"><span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                  </span></button>
                </form>
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
