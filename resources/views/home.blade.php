<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>primo laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    {{-- esercizio iniziale --}}
    {{-- <h1>{{ $title }}</h1>

    @if (count($array) < 3)
        <h3>L'array non è abbastanza lungo</h3>
    @else
        <ul>
            @foreach ($array as $element)
                <li>{{ $element }}</li>
            @endforeach
        </ul>
    @endif --}}



    {{-- bonus --}}
    <div class="container mt-3">
        <h1>
            {{ $title }}
        </h1>


        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">

                        @foreach ($links as $link)
                            {{-- str_replace per sostituire gli spazi del link col trattino per avere href funzionante --}}
                            <a class="nav-link" href="/{{ str_replace(' ', '-', $link) }}">{{ $link }}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </nav>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
