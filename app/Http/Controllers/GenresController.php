<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genres;

class GenresController extends Controller
{
  // El método ​ GenresController@show​​ debe enviar a la vista ​ movies.blade.php​​ , el género
  // elegido y el listado de películas relacionadas. Cada película deberá linkear al detalle de la
  // misma.

  public function show($id) {
    //echo 'HOLA';
    return \App\Genres::find($id);
  }
  
}
