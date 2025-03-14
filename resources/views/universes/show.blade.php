<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Universe</title>
</head>
<body>
    <h1>Universe Details</h1>

    <p><strong>ID:</strong> {{ $universe->id }}</p>
    <p><strong>Name:</strong> {{ $universe->name }}</p>

    <a href="{{ route('universes.index') }}">Universos</a>
</body>
</html>