<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('laporan_pemasukan_barang', [
        'title' => 'Laporan Pemasukan Barang per Dokumen PABEAN'
    ]);
    redirect('/pemasukan_barang');
});


Route::get('/pemasukan_barang', function () {
    return view('laporan_pemasukan_barang', [
        'title' => 'Laporan Pemasukan Barang per Dokumen PABEAN'
    ]);
});
Route::get('/pengeluaran_barang', function () {
    return view('laporan_pengeluaran_barang', [
        'title' => 'Laporan Pengeluaran Barang per Dokumen PABEAN'
    ]);
});
Route::get('/posisi_wip', function () {
    return view('laporan_posisi_wip', [
        'title' => 'Laporan Posisi WIP'
    ]);
});
Route::get('/mutasi_bahan', function () {
    return view('laporan_mutasi_bahan', [
        'title' => 'Laporan Pertanggungjawaban Mutasi Bahan Baku/Bahan Penolong'
    ]);
});
Route::get('/mutasi_barang_jadi', function () {
    return view('laporan_mutasi_barang_jadi', [
        'title' => 'Laporan Pertanggungjawaban Mutasi Barang Jadi'
    ]);
});
Route::get('/mutasi_mesin', function () {
    return view('laporan_mutasi_mesin', [
        'title' => 'Laporan Pertanggungjawaban Mutasi Mesin dan Peralatan'
    ]);
});
Route::get('/barang_reject', function () {
    return view('laporan_barang_reject', [
        'title' => 'Laporan Pertanggungjawaban Barang Reject dan Scrap'
    ]);
});
