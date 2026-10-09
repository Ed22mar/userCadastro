@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow">
    <h1 class="text-2xl font-bold text-center mb-6">Entrar</h1>

    <form action="{{ route('login') }}" method="POST">
        @csrf

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
        </div>

        <div class="mb-6 flex items-center">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label for="remember" class="text-sm text-gray-700">Lembrar-me</label>
        </div>

        <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 rounded transition">
            Entrar
        </button>
    </form>

    <p class="text-center mt-6 text-sm text-gray-600">
        Não tem uma conta?
        <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Cadastre-se</a>
    </p>
</div>
@endsection
