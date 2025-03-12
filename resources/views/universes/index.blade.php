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
            </tr>
        </thead>

        <tbody>
            @foreach($universes as $item)
                <tr>
                    <td> {{ $item-> id }}</td>
                    <td>{{ $item-> name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>