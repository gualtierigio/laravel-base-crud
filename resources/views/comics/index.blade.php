@extends('layouts.main')

@section('title', 'home')

@section('content')

    <h1>Tutti i comic</h1>
    <a href="{{ route('comics.create') }}">link di prova per nuovo comic(andrà nell header)</a>

    @forelse ($comics as $comic)

    <div>
        <ul>
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
            <li><h1>{{ $comic->title }}</h1></li>
            <li><h3>{{ $comic->author }}</h3></li>
            <li><p>{{ $comic->description }}</p></li>
            <li><img src="{{ $comic->url }}" alt=""></li>
        </ul>    
    </div>
        
    @empty

    <div>
        <h1>non ho trovato comics disponibili</h1>
    </div>
        
    @endforelse

@endsection