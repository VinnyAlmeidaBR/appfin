@extends('template')

@section('titulo', 'Seus Dados')

@section('nav-complementar')
<li class="nav-item">
    <a class="nav-link" href="{{ route('seus_gastos') }}">Entenda os seus gastos</a>
</li>
@endsection

@section('conteudo')
<header class="text-center">
    Seus Dados
</header>


<div class="container d-flex">
    <div class="col-md-12 p-3">
        <h2>Olá Fulano</h2>
    </div>
</div>

@endsection