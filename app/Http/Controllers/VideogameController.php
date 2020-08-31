<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideogameController extends Controller
{
  public function index(){
    $videogame = [
      'playstation' => ['The Last of Us', 'God of War'],
      'xbox' => ['Halo', 'Forza Motorsport'],
    ];

    return view('videogame', compact('videogame'));
  }
}
