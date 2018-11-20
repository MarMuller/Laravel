<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function algo() {
  $peliculas = [
  ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
  ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
  ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
  ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
  ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
  ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
  ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
  ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
  ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
  ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
  ];
  foreach ($peliculas as $peli) {
    echo '<li>'.$peli['title'].'-'.$peli['genre'].'</li>';
    echo '<img src="'.$peli['poster'].'" width=100 >';
  }
}

function buscaPeli($sarasa) {
  $peliculas = [
  ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
  ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
  ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
  ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
  ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
  ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
  ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
  ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
  ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
  ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
  ];

  $verf = false;

  foreach ($peliculas as $peli) {
    if ($peli['title'] == $sarasa) {
      echo '<li>'.$peli['title'].'-'.$peli['genre'].'</li>';
      echo '<img src="../'.$peli['poster'].'" width=100 >';
      $verf = true;
    }
  }

  if ($verf == false) {
    echo 'No encontré la peli';
  }

}

// function buscaID($sarasa) {
//   $peliculas = [
//   ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
//   ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
//   ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
//   ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
//   ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
//   ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
//   ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
//   ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
//   ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
//   ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
//   ];
//
//   $verf = false;
//
//   // echo count($peliculas).'<br><br>';
//   //
//   // echo $peliculas[0]['title'].'<br>';
//   // echo $peliculas[1]['title'].'<br>';
//   // echo $peliculas[2]['title'].'<br>';
//   //
//   // echo '<br><br>';
//
//   for ( $i=0 ; $i < count($peliculas); $i++ ) {
//
//     if ($i == $sarasa) {
//       echo $peliculas[$i]['title'].'-'.$peliculas[$i]['genre'].'<br>';
//       echo '<img src="../../'.$peliculas[$i]['poster'].'" width=100 >';
//       $verf = true;
//     }
//   }
//
//   if ($verf == false) {
//     echo 'El ID no es válido!';
//   }
//
// }

Route::get('/pelicula/id/{id}', function ($id) {
  return view('buscaID($id)');
});

// Route::get('foo', function () {
// return view('home');
// });

// Route::get('/pelicula/id/{id}', function ($id) {
//     buscaID($id);
// });

//------ CLASE 2 (arriba) ------//

Route::get('/pelicula/{titulo}', function ($titulo) {
    buscaPeli($titulo);
});

Route::get('/peliculas', function () {
    echo '<h1>Listado de pelis</h1><br>';
    echo '<ul>';
    algo();
    echo '</ul>';
});

Route::get('/miRuta', function () {
    return '<h1>Mi primer ruta en Laravel</h1>';
});

Route::get('/', function () {
    return view('welcome');
});

//------ CLASE 1 (arriba) ------//
