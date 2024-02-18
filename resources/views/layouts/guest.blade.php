<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            <?php $url = url()->full();
                 $path = parse_url($url, PHP_URL_PATH);
                 $path = ltrim($path, '/');
                 echo $path;
            ?>
        </title>

        <link rel="stylesheet" href="{{asset('css/login/login.css')}}" media="all" />
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- calendar jquer !-->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="form">

            <div class="login-form-container">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
