<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/home', 'App\Controllers\HomeController@index')->name('home');
