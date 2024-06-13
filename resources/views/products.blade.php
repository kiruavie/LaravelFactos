<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello File</title>
</head>

<body style="padding:50px">
    <ul>
        <li><a href="{{ route('home') }}">Accueil</a></li>
        <li><a href="{{ route('products', 20) }}">Tous les produits</a></li>
        <li><a href="{{ route('about') }}">A propos</a></li>
    </ul>
    <h1>Products</h1>


    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima optio et ipsum!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima optio et ipsum!</p>
    <hr>
    <footer>
        HarlemDev @2024
    </footer>
</body>

</html>
