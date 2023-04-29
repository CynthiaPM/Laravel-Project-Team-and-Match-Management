<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    
</head>



<body class="flex flex-col min-h-screen relative">


    <header >
       @include('layouts.header')
    </header>
    
    
    {{-- @include('layouts.partials.header') --}}
    
        <main class="flex-grow">@yield('content')</main>
    
        <footer>
            @extends('layouts.footer')
        </footer>
</body>

</html>