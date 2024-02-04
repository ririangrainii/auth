@extends('template.index')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Upload Bukti Bayar</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @foreach ( $buktiID as $id )
        <form action="{{ route('upload.bukti', ['id'=>$id->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- <input type="hidden" name="barang_id" value="{{ $id->barang_id }}">
            <input type="hidden" name="quantity" value="{{ $id->quantity }}">
            <input type="hidden" name="status" value="{{ $id->status }}"> --}}
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="buktibayar" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @endforeach
       
          <!-- /.card-body -->
@endsection