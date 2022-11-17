@extends('template')

@section('titulo', 'Nova entrada')

@section('nav-complementar')
<li class="nav-item">
    <a class="nav-link" href="{{ route('seus_gastos') }}">Entenda os seus gastos</a>
</li>
@endsection

@section('conteudo')
<header class="text-center">
    Nova Entrada
</header>


<div class="container d-flex">
    <div class="col-md-12 p-3">
        <p>Inclua uma Receita ou Despesa</p>
    </div>
</div>

@endsection