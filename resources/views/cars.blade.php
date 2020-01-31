<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>
            body {
                background: #123;
                margin: 0;
                font-size: 2rem;
                font-family: 'Nunito';
            }

            h2 {
                color: orange;
                margin-top: 0;
                margin-bottom: 0;
            }

            a, ol {
                color: #fff;
                text-decoration: none;
            }

            a:hover {
                color: orange;
                transition: color 0.3s;
            }
        </style>

    </head>
    <body>
        <h2>Cars:</h2>
        <ol>
            @foreach ($cars as $car)
                <li><a href="/single/{{ $car->id }}">Model: {{ $car->title }}, Producer: {{ $car->producer }}, Number of doors: {{ $car->number_of_doors }}</a></li>
            @endforeach
        </ol>
    </body>
</html>
