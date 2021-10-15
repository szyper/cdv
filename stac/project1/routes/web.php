<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cdv', function(){
  return view('cdv', ['name' => 'Janusz', 'surname' => 'Nowak']);
});

Route::get('/pages/{x}', function ($x) {
  $pages = [
    'about' => 'Strona o nas',
    'contact' => 'jan@gmail.com',
    'home' => 'Strona domowa'
  ];
  return $pages[$x];
});

Route::get('/address/{city?}/{street?}/{zipCode?}', function(string $city="-", string $street ="brak danych", int $zipCode=null){
  $zipCode = substr($zipCode, 0, 2)."-".substr($zipCode, 2, 3);
  echo <<< ADDRESS
    Kod pocztowy: $zipCode,
    miasto: $city<br>
    ulica: $street<hr>
ADDRESS;
})->name('address');

Route::redirect('/adres/{city?}/{street?}/{zipCode?}', '/address/{city?}/{street?}/{zipCode?}');
