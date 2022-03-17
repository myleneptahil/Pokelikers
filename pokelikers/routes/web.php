<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PokemonListController;
use App\Http\Controllers\PokemonPollsSurveyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "Please love Pokemon so that you can access this site.";
});


Route::get('/pokemonlist', [PokemonListController::class,'index']);

Route::get('/profile', [ProfileController::class,'index']);

Route::get('/pokemonpollssurvey', [PokemonPollsSurveyController::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
