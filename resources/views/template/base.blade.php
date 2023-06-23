<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Curso Laravel - Academia Tec 2022</title>
</head>
<body>
    <div class="header centrar">
        @include('template.header')
    </div>
    <div class="secciones">
        <div class="menu">
            @include('template.menu')
        </div>
        <div class="content centrar">
            @yield('content')
        </div>
    </div>
    <div class="footer centrar">
        @include('template.footer')
    </div>
</body>
</html>