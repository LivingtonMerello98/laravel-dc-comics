@extends('layouts.app')

@section('page-title')
home
@endsection


@section('all_comics')

<h1>Elenco Comics</h1>
    <ul>
        @foreach ($comics as $comic)
            <li><a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('comics.create') }}">Crea nuovo comic</a>

@endsection