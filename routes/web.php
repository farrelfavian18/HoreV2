<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/pemesanan',function(){
    return view('pemesanan');
});

Route::get('/transaksi',function(){
    return view('transaksi');
});

Route::get('/transaksi/index', function (){
    return view('transaksi.index');
});

Route::get('/pemesanan',function(){
    return view('pemesanan');
});

Route::get('/pemesanan/index', function (){
    return view('pemesanan.index');
});