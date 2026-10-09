<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu Sistema')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">

    {{-- Navbar --}}
    <nav class="bg-white shadow">
        <div class="max-w-5xl mx-auto px-4 py-3 flex justify-between items-center">
            <a href="" class="font-bold text-lg text-gray-800">
                Meu Sistema
            </a>

            <div class="flex items-center gap-4">
                @auth
                    <span class="text-gray-700">Olá, {{ auth()->user()->name }}</span>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">
                            Sair
                        </button>
                    </form>
                @else
                <a href="{{ route('login') }}" class="text-gray-700 hover:underline">Login</a>
                <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Cadastro</a>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Conteúdo --}}
    <div class="max-w-5xl mx-auto px-4 py-8">

        {{-- Mensagens de sucesso --}}
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </div>

</body>
</html>
