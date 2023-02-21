<?php

use App\Http\Controllers\Barang_C;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Table_C;

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

Route::get('/index', [Table_C::class,'table']);
Route::get('/table',[Barang_C::class, 'create']);
Route::post('/table/create',[Barang_C::class, 'store']);
Route::get('/table/{id}/edit',[Barang_C::class,'edit']); 
Route::POST('/table/{id}/proses',[Barang_C::class,'update']);
Route::delete('/table/{id}',[Barang_C::class,'destroy']);