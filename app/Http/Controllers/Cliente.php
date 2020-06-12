<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cliente extends Controller
{
    public function index(){
        return view('welcome');
    }

  
    public function cadastrar(){
        
    }       

    public function editar($id){
        
        $cliente = Cliente::find($id);
        return $cliente;

    }

    public function ler(){
        $clientes = Cliente::all();
    }


    public function lista(){
        return Cliente::all(); ;

    }
}
