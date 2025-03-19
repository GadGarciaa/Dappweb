<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Gender</title>
</head>
<body>
    <h1>Edit Gender</h1>

    <hr>
    <a href="{{ route('genders.index') }}">All genders</a>
    <hr>

    <form action="{{ route('genders.update', $gender->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Name</label>
        <input type="text" name="name" value="{{ $gender->name }}">

        <br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>