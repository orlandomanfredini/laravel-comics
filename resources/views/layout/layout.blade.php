<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @vite('resources/js/app.js')
  </head>
    <title>@yield('title')</title>
</head>
<style>
    main{
        padding: 30px;
        height: 100%;
    }
</style>

<body>
    @include('Partials.header')
    
    <main class="vite">
        @yield('content')
    </main>

    @include('Partials/footer')
</body>

</html>