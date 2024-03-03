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
    return view('home');
});
 
Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/sobre-nos', function () {
    return view('about');
});

Route::get('/pilares-e-valores', function () {
    return view('pilars');
});

Route::get('/nossa-infraestrutura', function () {
    return view('infra');
});

Route::get('/ensinos', function () {
    return view('learning');
});

Route::get('/programa-bilingue', function () {
    return view('bilingual');
});

Route::get('/material-sas', function () {
    return view('material');
});

Route::get('/contato', function () {
    return view('contact');
});