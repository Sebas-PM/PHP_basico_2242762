<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //cliente
    public function formulario_buscador(){
        //mostrar formulario del metabuscador para
        return view('metabuscador');

    }
    //servidor
    public function buscar(){
        //almacennar los datos transmitidos respectivas variables
        $termino=$_POST["termino"];
        $motores=$_POST["motores"];
        //determinar cual motor fue el elejido
        switch($motores){
            case 1://redireccionar a la direccion de google de busqueda
                return redirect()->to("https://www.google.com/search?q=$termino&source=hp");
                break;
            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3:
                return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
            case 4:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 5:
                return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&tn=baidu&wd=$termino");
                break;
            case 6:
                return redirect()->to("https://yandex.com/search/?oprnd=3794073544&text=$termino");
                break;
            case 7:
                return redirect()->to("https://search.naver.com/search.naver?where=nexearch&sm=top_hty&fbm=1&ie=utf8&query=$termino");
                break;
            case 8:
                return redirect()->to("https://search.seznam.cz/?q=sena&oq=$termino");
                break;
            case 9:
                return redirect()->to("https://search.aol.com/aol/search?q=$termino");
                break;
            case 10:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
        }
       /* echo "<pre>";
        print_r($_POST);
        echo "</pre>";*/
    }
}
