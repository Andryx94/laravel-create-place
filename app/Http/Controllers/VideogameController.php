<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;

class VideogameController extends Controller
{
  public function index(){
    $videogame = Videogame::all();

    return view('videogame', compact('videogame'));
  }
}
