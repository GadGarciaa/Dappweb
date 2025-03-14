<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gender List</title>
</head>
<body>
    <h1>Genders</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Información</th>
            </tr>
        </thead>

        <tbody>
            @foreach($genders as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('genders.show', $item->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>