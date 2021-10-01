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
})->name('welcome');


Route::get('/record',App\Http\Controllers\Record\show::class)->name('record');


Route::get('/medicine',App\Http\Controllers\Components\index::class)->name('medicine');

Route::get('/show',App\Http\Controllers\Components\Show::class)->name('show');


Route::get('/report',App\Http\Controllers\Components\Report::class)->name('report');

Route::get('/invoice',function(){
    return view('invoice');
})->name('invoice');