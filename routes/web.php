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

Route::get('/', function () {     return view('home'); });
Route::get('/login', function () {     return view('login'); });
Route::get('/register', function () {     return view('register'); });
Route::get('/addMovie', function () {     return view('addMovie'); });
Route::get('/theatre', function () {     return view('theatre'); });
Route::get('/seatbooking', function () {     return view('seatbooking'); });
Route::get('/review', function () {     return view('review'); });
Route::post('/addTheater' ,'TheaterController@create');
