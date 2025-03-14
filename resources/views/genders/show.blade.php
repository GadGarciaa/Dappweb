<!DOCTYPE html>
<html lang="en">
<head>
    <title>Show Gender</title>
</head>
<body>
    <h1>Gender Details</h1>

    <p><strong>ID:</strong> {{ $gender->id }}</p>
    <p><strong>Name:</strong> {{ $gender->name }}</p>

    <a href="{{ route('genders.index') }}">Géneros</a>
</body>
</html>