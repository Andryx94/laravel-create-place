<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VideogameModel;

class VideogameController extends Controller
{
  public function index(){
    // $videogame = [
    //   'playstation' => ['The Last of Us', 'God of War'],
    //   'xbox' => ['Halo', 'Forza Motorsport'],
    // ];
    $videogame = VideogameModel::all();

    return view('videogame', compact('videogame'));
  }
}
