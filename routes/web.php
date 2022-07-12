<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('Login');
});


Route::get('Register', 'App\Http\Controllers\LRController@register_form');

Route::post('Register', 'App\Http\Controllers\LRController@do_register');

Route::get('Login', 'App\Http\Controllers\LRController@login_form');

Route::post('Login', 'App\Http\Controllers\LRController@do_login');

Route::post('CheckUsername', 'App\Http\Controllers\LRController@checkUsername');

Route::post('CheckEmail', 'App\Http\Controllers\LRController@checkEmail');



Route::get('Home', 'App\Http\Controllers\HomeController@view_home');

Route::get('Preferiti', 'App\Http\Controllers\HomeController@view_prefers');

Route::get('LoadContents', 'App\Http\Controllers\HomeController@carica_contents');

Route::post('AddPreferito', 'App\Http\Controllers\HomeController@addPreferito');

Route::post('RicercaCampione', 'App\Http\Controllers\HomeController@API_DriverStandings');



Route::get('Logout', 'App\Http\Controllers\ProfileController@logout');  

Route::get('Profilo', 'App\Http\Controllers\ProfileController@view_profile');

Route::post('Modifica', 'App\Http\Controllers\ProfileController@modifica');



Route::get('LoadPref', 'App\Http\Controllers\PrefersController@carica_preferiti');

Route::post('RemovePref', 'App\Http\Controllers\PrefersController@remove_preferiti');



