<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
        html, body {
            background-color: black;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        h1 {
            color: blue;
            margin-left: 625px;
        }
        h2 {
            color: white;
        }
        h3 {
            color: yellow;
        }
        h4 {
            color: green;
            
        }
        a {
            color: green;
            margin-top: 600px;
        }
        li {
            color: yellow;
        }
        ul {
            color: white;
        }
        img {
            margin-left: 700;
        }
        p {
            color: white;
        }
        </style>
</head>
<body>
    
    <h1>zoomer</h1>

    @yield('content')

    <a href="/">refresh page</a>

</body>
</html>