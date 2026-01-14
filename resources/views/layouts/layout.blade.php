<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="author" content="Daniela Vieira" />
    <meta name="description" content="Sistema de Notas Pessoais desenvolvido na linguagem PHP/Laravel" />

    <title>Sistema de Anotação Pessoal</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
     {{-- start views/components/notification --}}
        <x-notification /> 
    {{-- end views/components/notification --}}
    
    @include('includes.header')

    <main class="container mt-2">
        @yield('header')
        @yield('content')
    </main>

</body>
</html>