<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Super Hero</title>
</head>
<body>
    <h1>Edit SuperHero</h1>

    <hr>
    <a href="{{ route('superheroes.index') }}">All SuperHeroes</a>
    <hr>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('patch')
        <label for="">Gender:</label>
        <select name="gender_id">
            @foreach($genders as $gender)
                <option value="{{ $gender->id }}" {{ $superhero->gender_id == $gender->id ? 'selected' : '' }}>{{ $gender->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="">Real Name</label>
        <input type="text" name="real_name" value="{{ $superhero->real_name }}">

        <br><br>

        <label for="">Name</label>
        <input type="text" name="name" value="{{ $superhero->name }}">
        
        <br><br>

        <label for="">Universe</label>
        <select name="universe_id">
            @foreach($universes as $universe)
                <option value="{{ $universe->id }}" {{ $superhero->universe_id == $universe->id ? 'selected' : '' }}>{{ $universe->name }}</option>
            @endforeach
        </select>

        <br><br>

        <label for="">Picture URL</label>
        <input type="text" name="picture" value="{{ $superhero->picture }}">

        <br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>