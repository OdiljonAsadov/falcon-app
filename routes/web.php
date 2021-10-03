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
Route::get('/','CategoryController@mainPage');
Route::get('/catigory','CategoryController@categoryPage');
Route::get('/about','CategoryController@aboutPage');
// Route::get('/', function () {
//     return view('front.index');
// });
// Route::get('/about', function () {
//     return view('front.aboutPage');
// });
Route::get('/contact', function () {
    return view('front.contactPage');
});
Route::get('/gallery', function () {
    return view('front.galleryPage');
});
Route::get('/servise', function () {
    return view('front.servisePage');
});
// Route::get('/catigory', function () {
//     return view('front.catigoryPage');
// });

Route::get('/admin',function(){
    return view('index');
});

// -- Category--//

Route::get('/category','CategoryController@index');
Route::get('/category/add','CategoryController@create');
Route::post('/category/add','CategoryController@store');
Route::get('/category/edit/{id}','CategoryController@edit');
Route::post('/category/edit/{id}','CategoryController@update');
Route::get('/category/delete/{id}','CategoryController@destroy');

// -- Information -- //

Route::get('/information','InformationController@index');
Route::get('/information/add','InformationController@create');
Route::post('/information/add','InformationController@store');
Route::get('/information/edit/{id}','InformationController@edit');
Route::post('/information/edit/{id}','InformationController@update');
Route::get('/information/delete/{id}','InformationController@destroy');
Route::get('/information/show/{id}','InformationController@show');

Route::get('/contact', 'TelegramBotController@sendMessage');
Route::post('/send-message', 'TelegramBotController@storeMessage');
Route::get('/send-photo', 'TelegramBotController@sendPhoto');
Route::post('/store-photo', 'TelegramBotController@storePhoto');
Route::get('/updated-activity', 'TelegramBotController@updatedActivity');