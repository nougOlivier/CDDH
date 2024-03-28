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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('contact-us',function(){
    return view(' contact ');
})->name('contact');

Route::get('Nos-Valeurs',function(){
    return view('NosValeurs');
})->name('valeurs');

Route::get('Actualités',function(){
    return view('actualite');
})->name('actualite');

Route::get('a-propos',function(){
    return view('apropos');
})->name('apropos');

