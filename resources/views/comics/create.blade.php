@extends('layouts.main')

@section('title' , 'New Comic')


@section('content')

    <form action="{{ route('comics.create') }}" method="POST">
    
    </form>

@endsection