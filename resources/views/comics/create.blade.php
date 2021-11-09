@extends('layouts.main')

@section('title' , 'New Comic')


@section('content')

    <a href="{{ route('comics.index') }}">Torna alla lista</a>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="title" class="form-lable">Titolo Comic</label>
            <input type="text" id="title" name="title" placeholder="inserisci il titolo" required>
        </div>

        <div>
            <label for="author" class="form-lable">Autore Comic</label>
            <input type="text" id="author" name="author" placeholder="inserisci il l'autore" required>
        </div>

        <div>
            <label for="description" class="form-lable">Description Comic</label>
            <input type="text" id="description" name="description" placeholder="inserisci una descrizione" required>
        </div>

        <div>
            <label for="url" class="form-lable">URL Comic</label>
            <input type="text" id="url" name="url" placeholder="inserisci un'immagine">
        </div>

        <div>
            <button type="reset">elimina tutti i campi</button>
            <button type="submint">Inserisci un nuovo comic</button>
        </div>


    </form>

@endsection