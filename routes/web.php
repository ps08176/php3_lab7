<?php

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




// Route::get('/applicationform/create','ApplicationFormController@create');
// Route::post('/applicationform','ApplicationFormController@store');




//Asm
Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex',
]);
// Route::get('shop',[
//     'as'=>'shop',
//     'uses'=>'PageController@getShop',
// ]);
Route::get('loai-san-pham/{type}',[
    'as'=>'loaisanpham',
    'uses'=>'PageController@getLoaisp',
]);
Route::get('chi-tiet-san-pham',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChitiet',
]);
Route::get('about',[
    'as'=>'about',
    'uses'=>'PageController@getAbout',
]);
Route::get('contact',[
    'as'=>'contact',
    'uses'=>'PageController@getContact',
]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
