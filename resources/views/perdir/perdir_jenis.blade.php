@extends('layouts.base')

@section('content')
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
              <th>Id</th>
              <th>Nama</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $datas)
            <tr>
              <td>{{ $datas->id }}</td>
              <td>{{ $datas->nama }}</td>
              <td>
                <form action="{{ route('perdirjenis.destroy', $datas->id) }}" method="post">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <a href="{{ route('perdirjenis.edit',$datas->id) }}" class=" btn btn-sm btn-primary">Edit</a>
                  <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

@endsection
