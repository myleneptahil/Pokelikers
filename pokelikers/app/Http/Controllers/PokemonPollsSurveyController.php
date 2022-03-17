<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonPollsSurveyController extends Controller
{
    public function index(){
        return view('pokemonpollssurvey');
    }
}
