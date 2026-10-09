@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-white p-8 rounded-lg shadow text-center">
    <h1 class="text-3xl font-bold mb-4">
        Bem-vindo, {{ auth()->user()->name }}!
    </h1>

    <p class="text-gray-600 mb-6">
        Você está logado com o e-mail: {{ auth()->user()->email }}</strong>
    </p>

    <p class="text-gray-500">
        Esta é a página principal do sistema.
    </p>
</div>
@endsection
