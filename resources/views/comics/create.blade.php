@extends('layouts.main')

@section('title' , 'New Comic')


@section('content')

    <a href="{{ route('comics.index') }}">Torna alla lista</a>

    <form action="{{ route('comics.create') }}" method="POST">
        @csrf

        <label for="name" class="form-lable">Titolo Comic</label>
        <input type="text" id="name" name="name" placeholder="inserisci il titolo del comic">

    </form>

@endsection