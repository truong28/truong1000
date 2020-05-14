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

//fontend
Route::get('/','homecontroller@index');
Route::get('/trang-chu','homecontroller@index');
Route::get('/admin_login','admin_logincontroller@index');
Route::get('/gioi-thieu','gioithieucontroller@index');
Route::get('/kh_login','kh_logincontroller@index');
Route::get('/kh_dangki','kh_dangkicontroller@index');
Route::post('/kh_login','kh_logincontroller@login');
Route::get('/logout','kh_logincontroller@logout');
Route::post('/kh_dangki','kh_dangkicontroller@sigup');


Route::get('/chi-tiet-tour','chitiettourcontroller@index');
Route::get('/chi-tiet-tour/{id_tour}','chitiettourcontroller@show_tour');
Route::get('/chi-tiet-tour/{idtour}/{key}','chitiettourcontroller@book');
Route::get('/chi-tiet-tour','chitiettourcontroller@thanhtoan');

Route::get('/list-tour','list_tourcontroller@index');
Route::get('/list-tour','list_tourcontroller@all_tour');

Route::get('/search','searchcontroller@index');
Route::post('/search','searchcontroller@showsearch');

Route::get('/vung-mien','vung_miencontroller@index');
Route::get('/vung-mien/{ten_vung}','vung_miencontroller@show');

Route::get('/hdv_login','hdv_logincontroller@index');
Route::post('/hdv_login','hdv_logincontroller@login');

Route::get('/hdv-home','hdv_homecontroller@index');
Route::get('/logout1','hdv_logincontroller@logout');

Route::get('/hdv-tour','hdv_tourcontroller@index');
Route::get('/hdv-tour','servercontroller@show');
Route::get('/tour_agree','tour_agreecontroller@index');
Route::get('/tour_agree','servercontroller@tour_agree');


Route::get('/server/{key}','servercontroller@agree');


Route::get('/thanh-toan','thanhtoancontroller@index');
