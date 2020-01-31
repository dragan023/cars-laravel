<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <h2>Cars:</h2>
        <ol>
            @foreach ($cars as $car)
                <li>Model: {{ $car->title }}, Producer: {{ $car->producer }}, Number of doors: {{ $car->number_of_doors }}</li>
            @endforeach
        </ol>
    </body>
</html>
