<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

            h1, h2, p {
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
    <title>Document</title>
</head>
<body>
    @yield('content')
</body>
</html>