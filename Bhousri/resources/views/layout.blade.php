<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}" </head>

<body class="antialiased">

    <div class="relative py-4 px-6">

        <nav>
            <a href="{{route('home.index')}}">home</a>
            <a href="{{route('home.about')}}">About</a>
            <a href="{{route('computers.index')}}">Computers</a>
            <a href="{{route('computers.create')}}">Create</a>
            <a href="{{route('home.contact')}}">Contact</a>
        </nav>
    </div>
    <div class="container text-center">
        @yield('title')

        @yield('content')
    </div>
</body>

</html>
