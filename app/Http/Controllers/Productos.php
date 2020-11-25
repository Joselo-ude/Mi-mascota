<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productos extends Controller
{
    //
    public function perro(){
        $CatalogoDog =[
          
            'alimento para perros',
            'codigo = 1002',
            'Precio = 6000'

        ];
        $al=[
          
            'alimento humedo',
            'codigo = 1015',
            'Precio = 15000'

        ];


        return view('Perros.catalogo', ['pe'=> $CatalogoDog,'ah'=> $al]);
    }

    public function gato(){
        return view('gatos.Catalogo');
    }

   
}
