<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $product = DB::table('tb_product')->join('tb_kategori', 'tb_product.kategori_id', '=', 'tb_kategori.id')
        ->select('tb_product.*', 'tb_kategori.tablekategori')->get();
        $title='Delete Data!';
        $text='Are you sure want to delete?';
        confirmDelete($title,$text);
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = DB::table('tb_kategori')->get();
        return view('product.tambah', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tb_product')->insert([
            'nama_product'=>$request->nm_product,
            'kategori_id'=>$request->namakategori,
            'harga'=>$request->harga,
            'gambar'=>$request->gambar->store('poto/produk', 'public'),
            'deskripsi'=>$request->deskripsi
        ]);
        Alert::success('Hore!', 'Categories Success');
        return redirect('/product');
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
        $kategori = DB::table('tb_kategori')->get();
        $product = DB::table('tb_product')->where('id', $id)->get();
        return view('product.edit', compact('kategori', 'product'));
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
        DB::table('tb_product')->where('id',$id)->update([
            'nama_product'=>$request->nm_product,
            'kategori_id'=>$request->namakategori,
            'harga'=>$request->harga,
            'gambar'=>$request->gambar->store('poto/produk', 'public'),
            'deskripsi'=>$request->deskripsi
        ]);
        Alert()->success('Hore!', 'Categories Berhasil');
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_product')->where('id', $id)->delete();
        Alert()->success('🤣', '😍😍😍😍😍');
        return redirect('product');
    }
}
