<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Netflix_icon.svg/1200px-Netflix_icon.svg.png">


    <title>MovieFlix</title>

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <header class="d-flex">
        <div class="logo">
            <img src="https://www.macitynet.it/wp-content/uploads/2016/06/netflix-logo-930x930.png" alt="MovieFlix Logo">
        </div>

        <div class="title text-danger fw-bold">
            <h1>
                MovieFlix
            </h1>
        </div>
    </header>
  
    <main class="py-5">
        <div class="container-lg">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3">
                        <div class="card mb-4" style="width: 18rem;">
                            <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
                            <div class="card-body">
                                <h5 class="card-title text-center fw-bold">{{ $movie->title }}</h5>

                                <p class="card-text mb-0">
                                    <span class="fw-bold">Titolo Originale: </span>
                                    <span>{{ $movie->original_title }}</span>
                                </p>

                                <p class="card-text mb-0">
                                    <span class="fw-bold">Nazionalità: </span>
                                    <span>{{ $movie->nationality }}</span>
                                </p>

                                <p class="card-text mb-0">
                                    <span class="fw-bold">Data di uscita: </span>
                                    <span>{{ $movie->date }}</span>
                                </p>

                                
                                <p class="card-text mb-0">
                                    <span class="fw-bold">Voto: </span>
                                    <span>{{ $movie->vote }}</span>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach    
            </div>
        </div>
    </main>
</body>
</html>