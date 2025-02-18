<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index () {
        $nome = "Samuel";
        $idade = "20";
        $arr = [1,2,3,4,5];

        $nomes = ["maria", "brenda", "ana", "Iury"];
        return view('welcome', 
            [
                'nome' => $nome, 
                'idade' => $idade, 
                'profissao' => 'programador',
                'arr' => $arr,
                'nomes' => $nomes
            ]);
    }

    public function create () {
        return view('events.create');
    }
}
