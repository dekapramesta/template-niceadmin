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

Route::get('/', function () { return view('login'); });
Route::get('/register', function () { return view('register'); });
Route::get('/home', function () { return view('index'); });
Route::get('/tables-general', function () { return view('tables-general'); });
Route::get('/tables-data', function () { return view('tables-data'); });
Route::get('/user-profile', function () { return view('user-profile'); });
Route::get('/faq', function () { return view('faq'); });
Route::get('/contacts', function () { return view('contacts'); });
Route::get('/error-404', function () { return view('error-404'); });
Route::get('/blank', function () { return view('blank'); });
