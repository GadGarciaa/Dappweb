<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Super Hero</title>
</head>
<body>
    <h1>Create SuperHero</h1>

    <hr>
    <a href="{{ route('superheroes.index') }}">All SuperHeroes</a>
    <hr>

    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <label for="">Gender:</label>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}">{{ $gender->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="">Real Name</label>
        <input type="text" name="real_name">

        <br><br>

        <label for="">Name</label>
        <input type="text" name="name">
        
        <br><br>

        <label for="">Universe</label>
        <select name="universe_id">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}">{{ $universe->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="">Picture</label>
        <input type="text" name="picture">

        <br><br>

        <input type="submit" value="create">
    </form>
</body>
</html>