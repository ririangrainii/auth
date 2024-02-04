@extends('template.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/kategori/save') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputNama">kategori</label>
                    <input type="text" name="simulasi" class="form-control" id="exampleInputEmail1"
                        placeholder="Nama Kategori">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
