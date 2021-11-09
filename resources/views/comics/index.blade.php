@extends('layouts.main')

@section('title', 'home')

@section('content')

    <h1>prova index</h1>
    <a href="{{ route('comics.create') }}">link di prova per nuovo comic(andrà nell header)</a>

@endsection