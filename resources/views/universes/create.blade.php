<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Universe</title>
</head>
<body>
    <h1>Create Universe</h1>

    <hr>
    <a href="{{ route('universes.index') }}">All Universe</a>
    <hr>


    <form action="{{ route ('universes.store') }}" method="post">
        @csrf
        
        <label for="">Name</label>
        <input type="text" name="name">

        <input type="submit" value="Create Universe">
    </form>
</body>
</html>