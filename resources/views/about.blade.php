<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    {{ $global_var }}
    <ul>
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('products') }}">Tous les produits</a></li>
        <li><a href="{{ route('about') }}">A propos</a></li>
    </ul>
    <h1>A propos de nous</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quas illum minus.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quas illum minus.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quas illum minus.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quas illum minus.</p>
</body>

</html>
