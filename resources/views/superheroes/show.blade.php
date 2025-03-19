<!DOCTYPE html>
<html lang="en">
<head>
    <title>SuperHero</title>

</head>
<body>
    <h1>{{$superhero->name}}</h1>

    <hr>
    <a href="{{ route('superheroes.index') }}">All SuperHeroes</a>
    <hr>

</body>
</html>