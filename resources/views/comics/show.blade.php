@extends('layouts.app')

@section('details')
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="">
    <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
    <p><strong>Price:</strong> {{ $comic->price }}</p>
    <p><strong>Serie:</strong> {{ $comic->series }}</p>
    <p><strong>Data di uscita:</strong> {{ $comic->sale_date }}</p>
    <p><strong>Genere:</strong> {{ $comic->type }}</p>

    <p><strong>Artisti:</strong></p>
    <ul>
        @foreach($comic->artists as $artist)
            <li>{{ $artist }}</li>
        @endforeach
    </ul>

    <p><strong>Scrittori:</strong></p>
    <ul>
        @foreach($comic->writers as $writer)
            <li>{{ $writer }}</li>
        @endforeach
    </ul>

    <a href="{{ route('comics.index') }}">Torna all'elenco Comics</a>
@endsection
