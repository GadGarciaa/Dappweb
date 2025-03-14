<!DOCTYPE html>
<html lang="en">
<head>
    <title>Universe Test</title>
</head>
<body>
    <h1>Universe</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Información</th>
            </tr>
        </thead>

        <tbody>
            @foreach($universes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('universes.show', $item->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>