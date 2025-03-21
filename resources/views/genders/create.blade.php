<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Gender</title>
</head>
<body>
    <h1>Create Gender</h1>

    <hr>
    <a href="{{ route('genders.index') }}">All Genders</a>
    <hr>

    <form action="{{ route('genders.store') }}" method="post">
        @csrf
        
        <label for="">Name</label>
        <input type="text" name="name">

        <input type="submit" value="Create Gender">
    </form>
</body>
</html>