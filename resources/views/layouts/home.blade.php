<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Boostrap --}}
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    {{-- Estilo personalizado --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/d6b75e91c7.js" crossorigin="anonymous"></script>

    <title>@yield('titulo')</title>
</head>
<body>

    <div id="app">
        @yield('conteudo')
    </div>

    {{-- Jquery 3.5.1 --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    {{-- Boostrap 4.6.1 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    {{-- Vue.js --}}
    <script src="{{asset('js/app.js')}}"></script>

    {{-- Popper.js --}}
    <script src="{{asset('js/popper.js')}}"></script>
</body>
</html>