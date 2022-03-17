<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonListController extends Controller
{
    public function index(){
        return view('pokemonlist');
    }
}
