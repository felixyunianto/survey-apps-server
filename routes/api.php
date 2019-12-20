<?php

use Illuminate\Http\Request;

Route::get('/users','UserController@show');
Route::post('/register','UserController@register');
Route::post('/login','UserController@login');


