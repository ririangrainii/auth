@extends('template.index')
@section('content')
<div class="card">
<div class="card-body">
  @foreach ($nomo as $n )
  <form action="{{ url('/kategori/update', $n->id) }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $n->id }}">
        <div class="form-group">
          <label for="exampleInputNama">kategori</label>
          <input type="text" name="simulasi" value="{{ $n->tablekategori }}" class="form-control" id="exampleInputEmail1" placeholder="Nama Kategori">
        </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  @endforeach

  </div>
  </div>
@endsection