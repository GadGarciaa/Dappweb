<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Universe</title>
</head>
<body>
    <h1>Edit Universe</h1>

    <hr>
    <a href="{{ route('universes.index') }}">All Universes</a>
    <hr>

    <form action="{{ route('universes.update', $universe->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $universe->name }}">

        <br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>