@extends('layout')
@section('title','List of statues')
@section('content')
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
            <td>@include('delete-statue-button', ['st' => $statue])</td>
        </tr>
    @endforeach
    </table>
@endsection
