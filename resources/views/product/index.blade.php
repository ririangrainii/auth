@extends('template.index')
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with minimal features & hover style</h3>
      <div class="d-flex justify-content-end">
        <a href="{{ url('/product/tambah')}}" type="tambah" class="btn btn-success">Tambah</a>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Gambar</th>
          <th>Nama Kategori</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ( $product as $p )
          <tr>
         <td>{{ $loop->iteration}}</td>
         <td>{{ $p->nama_product }}</td>
         <td> <img src="{{ Storage::disk('public')->url($p->gambar) }}" alt="Gambar Product" width=70px"></td>
         <td>{{$p->tablekategori}}</td>
         <td>{{ $p->harga }}</td>
         <td>{{ $p->deskripsi }}</td>
            <td>
              <div class="card-footer">
                <a href="{{url('/product/edit',$p->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{ url('/product/delete', $p->id) }}" class="btn btn-danger"data-confirm-delete="true">Delete</a>
              </div>
            </td>
          </tr>
          @endforeach  
        </tbody>
        <tfoot>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Gambar</th>
          <th>Nama Kategori</th>
          <th>Harga</th>
          <th>Deskripsi</th>
          <th>Action</th>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection