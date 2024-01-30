<?php
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth','role:admin'])->group(function () {
    Route::get('/product', [ProductController::class,'index'])->name('product.index');
    Route::get('/product/tambah', [ProductController::class,'create'])->name('product.tambah');
    Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::post('/product/save', [ProductController::class,'store'])->name('product.save');
    Route::post('/product/update/{id}', [ProductController::class,'update'])->name('product.update');
    Route::delete('/product/delete/{id}', [ProductController::class,'destroy'])->name('product.delete');
    
    
    
    Route::get('/kategori', [KategoriController::class,'index'])->name('kategori.index');
    Route::get('edit/{id}', [KategoriController::class,'edit'])->name('kategori.edit');
    Route::get('/kategori/tambah', [KategoriController::class, 'create'])->name('kategori.index');
    Route::post('/kategori/save', [KategoriController::class, 'store'])->name('kategori.store');
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');
    Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
