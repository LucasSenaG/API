@extends('layout/header')
@section('conteudo')

<div id="fundo">
    @foreach ($dados["results"] as $dado) 
        <div class="filme">
            <span>{{ $urlimg = "https://image.tmdb.org/t/p/original" . $dado['poster_path'] }};</span>
            <a href="/detalhes"><img src={{$urlimg}} alt="" srcset=""></a>
            <!-- <h3>{{ $dado['title'] }}</h3> -->
            <h3>{{ $dado['release_date'] }}</h3>
        </div>
    @endforeach
</div>
<div class="informacoes">
    <img src="" alt="">
    <div class="img-info">
        <span>{{ $urlimg = "https://image.tmdb.org/t/p/original" . $dado['poster_path'] }};</span>
        <!-- <img src={{$urlimg}} alt="" srcset=""> -->

    </div>
</div>

@endsection