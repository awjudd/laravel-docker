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

Route::get('/test', function () {
    //for($x = 0; $x < mt_rand(0, 1000000000); $x++);
    return 'Docker is working fine';
});

Route::get('/demo', function () {
    return 'Demo on jan 17';
});
