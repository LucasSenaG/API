<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Api extends Controller
{
    public function store(Request $requisicao) {
        $palavra = $requisicao->busca;

        $chaveApi = "ca5108f35e945c3a4864115db4c2a3ca";
        $api = Http::get("https://api.themoviedb.org/3/search/movie?query=".$palavra."&api_key=".$chaveApi."&language=pt-BR");
        $dados = json_decode($api, true);
        
        return view('conteudoApi', ['dados' => $dados]);
    }

}


