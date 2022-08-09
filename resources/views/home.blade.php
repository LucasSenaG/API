@extends('layout/header')
@section('conteudo')
    <div id="background-img">
        <form action="/store" method="POST">
            @csrf
            <p>Pesquise por um filme: </p>
            <input type="search" name="busca" id="busca">
            <button type="submit" class="btn btn-submit">Pesquisar</button>
        </form>
    </div>

@endsection
