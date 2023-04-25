<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>

    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    {{-- @include('layouts.partials.header') --}}
    <div class="flex-grow" >
        @yield('content')
    </div>
    
</body>
<footer>
    @extends('layouts.footer')
</footer>
</html>