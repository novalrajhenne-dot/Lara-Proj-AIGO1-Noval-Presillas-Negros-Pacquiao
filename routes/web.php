
<?php

use Illuminate\Support\Facades\Route;

// HOME PAGE - MEMBER 1 (GROUP LEADER)
Route::view('/', 'home')->name('home');

// ABOUT PAGE - MEMBER 2
Route::view('/about', 'about')->name('about');

// MENU PAGE - MEMBER 3
Route::view('/menu', 'menu')->name('menu');

// OUR SPACE PAGE - COLLABORATIVE PAGE
Route::view('/space', 'space')->name('space');

// CONTACT PAGE - MEMBER 4
Route::view('/contact', 'contact')->name('contact');
