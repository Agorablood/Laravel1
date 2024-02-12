<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Node\Block\Document;

class PruebaController extends Controller
{

    //Muestra el escenario inicial
    public function inicio()
    {

        return view('header') . view('inicio') . view('footer');
    }

    //Muestra el formulario de la escena 1
    public function mostrarPrimerEscenario()
    {

        return view('header') . view('primer-escenario') . view('footer');
    }

    //Muestra el formulario de la escena 2
    public function mostrarSegundoEscenario()
    {

        return view('header') . view('segundo-escenario') . view('footer');
    }

    //Muestra el formulario de la escena 3
    public function mostrarTercerEscenario()
    {

        return view('header') . view('tercer-escenario') . view('footer');
    }

    //Muestra el formulario de la escena 4
    public function mostrarCuartoEscenario()
    {

        return view('header') . view('cuarto-escenario') . view('footer');
    }
    
//Muestra el formulario de la escena 5
    public function mostrarQuintoEscenario()
    {

        return view('header') . view('quinto-escenario') . view('footer');
    }
    public function mostrarSextoEscenario()
    {

        return view('header') . view('sexto-escenario') . view('footer');
    }
    public function mostrarSeptimoEscenario()
    {

        return view('header') . view('septimo-escenario') . view('footer');
    }
    public function mostrarOctavoEscenario()
    {

        return view('header') . view('octavo-escenario') . view('footer');
    }
    public function mostrarNovenoEscenario()
    {

        return view('header') . view('noveno-escenario') . view('footer');
    }
    public function mostrarDecimoEscenario()
    {

        return view('header') . view('decimo-escenario') . view('footer');
    }
    public function mostrarUndecimoEscenario()
    {

        return view('header') . view('undecimo-escenario') . view('footer');
    }
    public function mostrarDuodecimoEscenario()
    {

        return view('header') . view('duodecimo-escenario') . view('footer');
    }
    public function finalEscenario()
    {

        return view('header') . view('final') . view('footer');
    }
}
