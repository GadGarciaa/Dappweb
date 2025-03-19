<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender List</title>
</head>
<body>
    <h1>Genders</h1>

    <hr>
    <a href="{{ route('genders.create') }}">Create Gender</a>
    <hr>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($genders as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('genders.show', $item->id) }}">View</a>
                        <a href="{{ route('genders.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('genders.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this gender?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>