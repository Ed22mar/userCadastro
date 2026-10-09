@extends('layouts.app')

@section('title', 'Cadastro')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow">
    <h1 class="text-2xl font-bold text-center mb-6">Criar conta</h1>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Nome</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
            @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">E-mail</label>
            <input type="email" name="email" value="{{ old('email') }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
            @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium mb-1">Senha</label>
            <input type="password" name="password"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
            @error('password')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block text-sm font-medium mb-1">Confirmar Senha</label>
            <input type="password" name="password_confirmation"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                   required>
        </div>

        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded transition">
            Cadastrar
        </button>
    </form>

    <p class="text-center mt-6 text-sm text-gray-600">
        Já tem uma conta?
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Faça login</a>
    </p>
</div>
@endsection
