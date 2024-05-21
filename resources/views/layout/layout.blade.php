<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <title>@yield('title')</title>
</head>
<style>
    main{
        padding: 30px;
        height: 77vh;
    }
</style>

<body>
    @include('Partials.header')
    
    <main>
        @yield('content')
    </main>

    @include('Partials/footer')
</body>

</html>