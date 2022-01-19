<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit statue</title>
</head>
<body>
    <h1>Edit statue</h1>
    <form method='POST' action="{{ route('statues.update', $statue->id ) }}">
        @csrf
        @method('PUT')
        <!--<input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">-->
        <div>
            Person:<br>
            <input type="text" name="person" value="{{ $statue->person }}">
        </div>
        <div>
            Height:<br>
            <input type="number" name="height" value="{{ $statue->height }}">
        </div>
        <div>
            Price:<br>
            <input type="number" name="price" value="{{ $statue->price }}">
        </div>
        <div>
            <input type="submit" value="Edit">
        </div>
    </form>
</body>
</html>
