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
route::get("paises",function(){
    $paises = ["Colombia" =>[
                                "capital" => "Bogotá",
                                "moneda" => "Peso",
                                "poblacion" => 51
                            ],
                "Peru" =>   [
                                "capital" => "lima",
                                "moneda" => "sol",
                                "poblacion" => 32
                            ],
                "Paraguay"=>[
                                "capital" => "asuncion",
                                "moneda" => "guarani",
                                "poblacion" => 7
                            ]];
    /*foreach($paises as $nombre => $pais){
        echo "<pre>";
        echo "<h1>$nombre</h1>";
        print_r($pais["capital" ]. "<br />");
        print_r($pais["moneda"]."<br />");
        print_r($pais["poblacion"]."<br />");
        echo "</pre>";
        echo "<hr />";
    }
$suma=0;
foreach($paises as $nombre => $pais):
$suma += $pais["poblacion"];
endforeach;
echo "la suma de los paises es $suma";*/
    //Llamar una vista
    //con datos paises
    //alias: nimbre con el cual
    //se reconoce los datos en la vista
    return view("paises")->with("naciones", $paises);
});

Route::get('formulario_buscador','MetabuscadorController@formulario_buscador');

Route::post('buscar','MetabuscadorController@buscar');

//definir variable en php
