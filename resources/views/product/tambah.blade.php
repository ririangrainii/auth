@extends('template.index')
@section('content')
<form action="{{ route('product.save') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputNama">Nama Produk</label>
        <input type="text" class="form-control" name="nm_product" id="exampleInputEmail1" placeholder="Nama Produk">
      </div>
      <div class="form-group">
        <label for="exampleInputJenis1">Nama Kategori</label>
        <select name="namakategori" id="" class="form-control">
        @foreach ($kategori as $k)
       <option value="{{ $k->id }}">{{ $k->tablekategori }}</option>
       @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputJumlah1">Harga</label>
        <input type="number" class="form-control" name="harga" id="exampleInputJumlah1" placeholder="Jumlah Produk">
          </div>
          
      <div class="form-group">
        <label for="exampleInputFile">Gambar</label>
       <div class="input-group">
        <div class="custom-file">
          <input type="file" class="form-control" name="gambar">
        </div>
       </div>
          </div>

          <div class="form-group">
            <label for="exampleInputJumlah1">deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="exampleInputdeskripsi1" placeholder="Deskripsi Product">
          </div>
       
          
   
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection