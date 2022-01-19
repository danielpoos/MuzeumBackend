<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of statues</title>
</head>
<body>
    <p><a href="{{ route('home') }}">Back to the home page</a></p>

    <table>
        <tr>
            <th>Person</th>
            <th>Height</th>
            <th>Price</th>
            <th>Operations</th>
        </tr>
    @foreach ($statues as $statue)
        <tr>
            <td>
                <a href="{{ route('statues.show', $statue->id) }}">{{ $statue->person }}</a>
            </td>
            <td>{{ $statue->height }}</td>
            <td>{{ $statue->price }}</td>
            <td><form action="{{ route('statues.destroy', $statue->id) }}" method="POST">@csrf @method('DELETE')<button type="submit">Delete</button></form></td>
        </tr>
    @endforeach
    </table>
</body>
</html>
