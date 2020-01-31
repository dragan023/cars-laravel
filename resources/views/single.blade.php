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
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                height: 100vh;
            }

            h2, p {
                color: orange;
                margin-top: 0;
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
        <h2>Model: {{ $singleCar->title }}</h2>

        <p>Producer: {{ $singleCar->producer }}</p>
        <p>Doors: {{ $singleCar->number_of_doors }}</p>
    </body>
</html>
