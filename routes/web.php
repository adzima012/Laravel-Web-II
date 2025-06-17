<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

// Tampilin semua barang (Read)
Route::get('/barang', [BarangController::class, 'index'])->name('barang');

// Tampilin from tambah data (Create - form)
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

// Simpen data baru (Create - action)
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');

// Tampilin from edit data (Update - form)
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');

// Simpen data yang diedit (Update - action)
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');

// Hapus data (Delete)
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/artikel1', function () {return view('artikel1');});
Route::get('/artikel2', function () {return view('artikel2');});

Route::get('Bioskop/list_cinema', function () {
    return view('Bioskop.list_cinema');
})->name('bioskop.list_cinema');

Route::get('Bioskop/list_film', function () {
    return view('Bioskop.list_film');
})->name('bioskop.list_film');

Route::get('Bioskop/menu_bioskop', function () {
    return view('Bioskop.menu_bioskop');
})->name('bioskop.menu_bioskop');

Route::resource('barangNew', App\Http\Controllers\BarangNewController::class);