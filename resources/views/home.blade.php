<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Netflix_icon.svg/1200px-Netflix_icon.svg.png">


    <title>MovieFlix</title>
</head>

<body>
    <header>
        <h1>
            ciao
        </h1>
    </header>
    <main>
        @foreach ($movies as $movie)
            <p>{{$movie}}</p>
        @endforeach
    </main>
</body>
</html>