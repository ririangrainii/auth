@extends('template.index')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
      <div class="d-flex justify-content-end">
        <a href="{{ url('/kategori/tambah')}}" type="tambah" class="btn btn-success">Tambah</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th style="width: 10%">Nomor</th>
          <th>Nama</th>
          <th style="width: 20%">Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($nomo as $n )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $n->tablekategori }}</td>
            <td>
              <div class="card-footer">
                <a href="{{url('edit', $n->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{url('/kategori/delete', $n->id)}}" class="btn btn-danger">Delete</a>
                
              </div>
            </td>
          </tr>     
          @endforeach
               
        </tbody>
        <tfoot>
          <th>Nomor</th>
          <th>Nama</th>
          <th>Action</th>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection