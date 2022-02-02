@extends('layout')
@section('title','New statue')
@section('content')
    <h1>New statue</h1>
    <form method='POST' action="{{ route('statues.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Person:<br>
            <input type="text" name="person" value="{{ old('person') }}">
            @error('person')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            Height:<br>
            <input type="number" name="height" value="{{ old('height') }}">
            @error('height')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            Price:<br>
            <input type="number" name="price" value="{{ old('price') }}">
            @error('price')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div>
            <input type="submit" value="Create" class="btn-secondary">
        </div>
    </form>
@endsection
