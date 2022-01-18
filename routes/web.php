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
Route::get('index',[    
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);
Route::get('loai-san-pham',[
    'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaiSp'
]);
Route::get('chi-tiet-san-pham',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet'
]);
Route::get('lienhe',[
    'as'=>'lienhe',
    'uses'=>'PageController@getLienhe'
]);
Route::get('dang-nhap','PageController@getLogin')->name('login');
Route::post('dang-nhap','PageController@postLogin')->name('login');
Route::get('sau-dang-nhap','PageController@sauLogin')->name('sau-login');




Route::get('dang-ki','PageController@getSignin')->name('signin');
Route::post('dang-ki','PageController@postSignin')->name('signin');
Route::get('dang-xuat','PageController@postLogout')->name('logout');
Route::get('search','PageController@getSearch')->name('search');
