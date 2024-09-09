<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>primo laravel</title>
</head>

<body>
    <h1>{{ $title }}</h1>

    @if (count($array) < 3)
        <h3>L'array non è abbastanza lungo</h3>
    @else
        <ul>
            @foreach ($array as $element)
                <li>{{ $element }}</li>
            @endforeach
        </ul>
    @endif

</body>

</html>
