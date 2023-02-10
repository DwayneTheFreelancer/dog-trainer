<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'Jen\'s Dog Training')</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
        <link type="text/css" rel="stylesheet" href="{{ secure_asset('MDB5/css/mdb.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ secure_asset('MDB5/plugins/css/multi-carousel.min.css') }}">
        <link type="text/css" rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    </head>
    <body>
       @include('components.header')
       <div class="content">
            @yield('content')
       </div>
       @include('components.footer')
    <script src="{{ secure_asset('js/app.js') }}"></script>
    <script src="{{ secure_asset('MDB5/plugins/js/multi-carousel.min.js') }}"></script>
    <script src="{{ secure_asset('MDB5/js/mdb.min.js') }}"></script>
    </body>
</html>