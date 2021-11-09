@extends('layouts.main')

@section('title' , 'New Comic')


@section('content')

    <form action="{{ route('comics.create') }}" method="POST">
        @csrf

        <label for="name"></label>

    </form>

@endsection