<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('tb_product')->join('tb_kategori', 'tb_product.kategori_id', '=', 'tb_kategori.id')
        ->select('tb_product.*', 'tb_kategori.tablekategori')->get();
        return view('landingpage.cardproduct',compact('produk'));
        
    }


    public function orderID(string $id)
    {
        //firs gunanya uuntuk mengambil id pertama yg ditemukan
    $produk = DB::table('tb_product')->where('id',$id)->first();
    return view('order.form',compact('produk'));
    }


    public function listTransaksi()
    {
        $transaksi = DB::table('tb_transaksi')->join('tb_product', 'tb_transaksi.barang_id', '=', 'tb_product.id')
        ->select('tb_transaksi.*', 'tb_product.*')->get();
        return view('transaksi.list',compact('transaksi'));

    }

    public function uploadBukti($id){
        $buktiID = DB::table('tb_transaksi')->where('id',$id)->get();
        return view('order.upload', compact('buktiID'));
    }


    public function upload(Request $request, string $id){
        DB::table('tb_transaksi')->where('id',$id)->update([
            //buat ini sesuaikan dengan name yang ada file upload.blade.php 
            // 'barang_id'=>$request->barang_id,
            // 'quantity'=>$request->quantity,
            // 'status'=>$request->status,
            'buktibayar'=>$request->buktibayar->store('poto/bukti', 'public'),
        ]);
        return redirect('transaksi');

    }
    public function status($id){
        $data = DB::table('tb_transaksi')->where('id',$id)->first();
 
        $status_sekarang = $data->status;
 
        if($status_sekarang == 1){
            DB::table('tb_transaksi')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            DB::table('tb_transaksi')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('transaksi');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB:: table('tb_transaksi')->insert([
            'barang_id'=>$request->barang_id,
            'quantity'=>$request->quantity,
        ]);
        return redirect('/transaksi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
