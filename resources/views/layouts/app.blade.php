<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            Acandemic</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
               <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.tiny.cloud/1/9smvh3nkz2t0f0a0hkesop56luvhdpa24thgjmz90e2hl3ej/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
        <script src="https://kit.fontawesome.com/9430b0a6c3.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://kit.fontawesome.com/lib/Font-Awesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://kit.fontawesome.com/lib/Font-Awesome/css/regular.min.css">
        <link rel="stylesheet" href="https://kit.fontawesome.com/lib/Font-Awesome/css/solid.min.css">


    </head>
    <body class="bg-white font-sans antialiased overflow-y">
        <div class="min-h-screen bg-gray-400 overflow-scroll">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
              </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>


        </div>
    </body>
</html>
<script>
    tinymce.init({
        selector: '#textDescription',
        menubar: false,
        toolbar_location: 'bottom',
        toolbar: ' bold italic underline bullist',
        plugins: 'lists',
        branding: false,
        statusbar:false,
        plugins: 'lists',
    });
</script>

