<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universe List</title>
</head>
<body>
    <h1>Universes</h1>

    <hr>
    <a href="{{ route('universes.create') }}">Create Universe</a>
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
            @foreach($universes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('universes.show', $item->id) }}">View</a>
                        <a href="{{ route('universes.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('universes.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this universe?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>