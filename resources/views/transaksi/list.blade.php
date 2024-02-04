@extends('template.index')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
            <div class="d-flex justify-content-end">
                <a href="" type="tambah" class="btn btn-success">Tambah</a>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga< Produk/th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Bukti Bayar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $t)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td> <img src="{{ Storage::disk('public')->url($t->gambar) }}" alt="Gambar Product" width=70px">
                            </td>
                            <td>{{ $t->nama_product }}</td>
                            <td>Rp.{{ number_format($t->harga) }}</td>
                            <td>{{ $t->quantity }}</td>
                            <td> <img src="{{ Storage::disk('public')->url($t->buktibayar) }}" alt="Gambar Product"
                                    width=70px"></td>
                            <td>{{ $t->status }}</td>
                            <td>
                                {{-- <div class="card-footer"> --}}
                                @hasrole('user')
                                    <a href="{{ route('upload', ['id' => $t->id]) }}" class="btn btn-primary">Upload Bukti</a>
                                    <a href="" class="btn btn-danger"data-confirm-delete="true">Delete</a>
                                @endhasrole

                                <!-- untuk tambahin button -->
                                @hasrole('admin')
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary">Status</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-icon"
                                            data-toggle="dropdown">
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <div class="dropdown-menu" role="menu">
                                            @if ($t->status == 1)
                                                {{-- boolean ternaryoperator --}}
                                                <a href="{{ route('transaksi.status', ['id' => $t->id]) }}"
                                                    class="dropdown-item">Pending</a>
                                            @else
                                                <a href="{{ route('transaksi.status', ['id' => $t->id]) }}"
                                                    class="dropdown-item">Berhasil</a>
                                            @endif
                                        </div>
                                    </div>
                                @endhasrole
                                {{-- </div> --}}
                            </td>
                        </tr>
                        <!-- untuk form total harga -->
                        <tr>
                            <td class="text-bold" colspan="5">Total Bayar</td>
                            <td class="text-danger">
                                @php
                                    $total = $t->harga * $t->quantity;
                                @endphp
                                Rp. {{ number_format($total) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <th>No</th>
                    <th>Gambar Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga< Produk/th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>Bukti Bayar</th>
                    <th>Action</th>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
