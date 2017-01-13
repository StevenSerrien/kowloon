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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', function () {
//     return view('pages.home');
// });


// Route::get('/about', function () {
//     return view('pages.about');
// });


Route::post('/subscribe', 'SubscribeController@store');

Route::get('/', 'PageController@home');
Route::get('/about', 'PageController@about');
Route::post('/contact', 'PageController@contact');
Route::get('/productlist/{animal}', 'PageController@productList');
Route::get('/productlist/{animal}/{productname}', 'PageController@productDetail');
