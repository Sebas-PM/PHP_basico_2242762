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
//funcion anonima
Route::get('variables', function(){
    $mensaje = 20;
    //funcion var_dump:analizar una variable
    //muestra tipo de dato y valor
    //funcion print_r:analizar una variables
    //muestra solo el valor de la variable
    print_r($mensaje);
    echo "<hr />";
    $mensaje=true;
    var_dump($mensaje);
});

Route::get('arreglos', function (){
    //Arreglo: una estructura de datos
    $estudiantes = ['AN'=>'Ana',
                    'MA'=>'Maria',
                    'JO'=>'Jorge' ];
    echo "<pre>";
    var_dump($estudiantes);
    echo"</pre>";
});
//definir variable en php
