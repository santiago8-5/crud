<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- @vite('resources/css/app.css') --}}
    <title>@yield('titulo')</title>
    {{-- @vite('resources/js/app.js') --}}
    <script src="https://cdn.tailwindcss.com"></script> 

    <Style>
        .active{
            color: blue  !important;
        }
    </Style>


        
</head>

<body class="bg-gray-100">



    {{-- HEADER --}}
    @include('layouts.partials.header')
    {{-- FIN HEADER --}}



    {{-- CONTENIDO --}}
    <div class="container mx-auto mt-10">
        @yield('content')
    </div>
    {{-- FIN CONTENIDO --}}



    {{-- FOOTER --}}

    @include('layouts.partials.footer')
    {{-- FIN FOOTER --}}


</body>

</html>