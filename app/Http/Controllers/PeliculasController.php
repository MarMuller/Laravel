<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{

  public function show($id) {
    //echo 'HOLA';
    return \App\Movies::find($id);
  }

  public function edit($id) {
    //1 primero busco por id
    $movies = Movies::find($id);

    //2 edito atributos
    $movies->name = $request->input('name');

    //3 actualizo base de datos
    $movies->save();

    //4 volver a lista inicial
    return redirect('/movies');

  }

  //acá se validan los campos
  public fuction save( $request, [
    'titulo' => 'required|unique:title',
    'rating' => 'required|numeric|min:0|max:10',
    'premios' => 'required|numeric',
    'duracion' => 'required|numeric',
    'dia' => 'required|numeric',
    'mes' => 'required|numeric',
    'anio' => 'required|numeric',
  ], [
    'titulo.required' => 'El campo titulo es requerido',
    'titulo.unique' => 'El título de esta película ya está registrado',
    'rating.required' => 'El rating titulo es requerido',
    'rating.numeric' => 'Debe ingresar un número en campo rating',
    'rating.min' => 'El rating mínimo es de 0',
    'rating.max' => 'El rating máximo es de 10',
    'premios.required' => 'El campo premios es requerido',
    'premios.numeric' => 'Debe ingresar un número en campo premios',
    'duracion.required' => 'El campo duración es requerido',
    'duracion.numeric' => 'Debe ingresar un número en campo duración',
    'dia.required' => 'Debe ingresar el día de estreno',
    'dia.numeric' => 'El día ingraso debe ser un número',
    'mes.required' => 'Debe ingresar el día de estreno',
    'mes.numeric' => 'El día ingraso debe ser un número',
    'anio.required' => 'Debe ingresar el día de estreno',
    'anio.numeric' => 'El día ingraso debe ser un número',

    //el required no hace falta mencionar todos uno por uno, solo poner 'required' => ...
  ]);

  //siesta todo bien guardado en la BD
  $genre = Genre::create([
    'titulo' => $request->input('title'),
    'rating' => $request->input('rating'),
    'premios' => $request->input('awards'),
    'duracion' => $request->input('length'),
  ]);

  //volver a lista inicial
  return redirect('/movies');
  // return view( 'agregarpelicula', compact(['']) );




  // function buscaID($sarasa) {
  //   $peliculas = [
  //   1 => "Toy Story",
  //   2 => "Buscando a Nemo",
  //   3 => "Avatar",
  //   4 => "Star Wars: Episodio V",
  //   5 => "Up",
  //   6 => "Mary and Max"
  //   ];
  //
  //   $verf = false;
  //
  //   for ( $i=0 ; $i < count($peliculas); $i++ ) {
  //
  //     if ($i == $sarasa) {
  //       echo $peliculas[$i]['title'].'-'.$peliculas[$i]['genre'].'<br>';
  //       echo '<img src="../../'.$peliculas[$i]['poster'].'" width=100 >';
  //       $verf = true;
  //     }
  //   }
  //   if ($verf == false) {
  //     echo 'El ID no es válido!';
  //   }
  // }



}
