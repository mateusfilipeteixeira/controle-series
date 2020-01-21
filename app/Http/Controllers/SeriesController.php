<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller {
    public function index(){
        $series = [
            'Teste 1',
            'Teste 2',
            'Teste 3'
        ];

        return view('series.index', compact('series'));
    }

    public function create(){
        return view('series.create');
    }

    public function store(Request $request){
        $nome = $request->nome;
    }
}
