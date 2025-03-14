<!DOCTYPE html>
<html lang="en">
<head>
    <title>SuperHero Test</title>
</head>
<body>
    <h1>SuperHero</h1>

    <table>
        <thead>
            <tr>
                <th>Gender</th>
                <th>Real Name</th>
                <th>Name</th>
                <th>Universe</th>
                <th>Picture</th>
            </tr>
        </thead>

        <tbody>
            @foreach($superheroes as $item)
                <tr>
                    <td>{{ $item->gender->name ?? 'N/A' }}</td>
                    <td>{{ $item->real_name }}</td>
                    <td>{{ $item->name }}</td> 
                    <td>{{ $item->universe->name ?? 'N/A' }}</td> 
                    <td>
                        @if($item->picture)
                            <img src="{{ $item->picture }}" alt="{{ $item->name }}" width="100">
                        @else
                            N/A
                        @endif
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>