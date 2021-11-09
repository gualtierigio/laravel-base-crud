@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <li><h1>{{ $comic->title }}</h1></li>
            <li><h3>{{ $comic->author }}</h3></li>
            <li><p>{{ $comic->description }}</p></li>
            <li><img src="{{ $comic->url }}" alt=""></li>
@endsection