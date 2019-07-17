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

//route to home page
Route::get('/home', function () {
		return view('pages.home');
	});

//route to contact page
Route::get('/contact', function () {
		return view('pages.contact');
	});

//route to about page
Route::get('/about', function () {
		return view('pages.about');
	});

//route to portfolio page
Route::get('/portfolio', function () {
		return view('pages.portfolio');
	});

Route::post('/register', function () {
		return view('pages.home');
	});