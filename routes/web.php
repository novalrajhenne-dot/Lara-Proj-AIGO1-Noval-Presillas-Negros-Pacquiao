
<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');


Route::view('/about', 'about')->name('about');


Route::view('/menu', 'menu')->name('menu');



Route::view('/contact', 'contact')->name('contact');
