@extends('layouts.app')

@section('details')
<h1>{{ $comic->title }}</h1>
<img src="{{ $comic->thumb }}" alt="">
<p><strong>Descrizione:</strong> {{ $comic->description }}</p>
<p><strong>Price:</strong> {{ $comic->price }}</p>
<p><strong>Serie:</strong> {{ $comic->series }}</p>
<p><strong>Data di uscita:</strong> {{ $comic->sale_date }}</p>
<p><strong>Genere:</strong> {{ $comic->type }}</p>
<p><strong>Artista:</strong> {{ $comic->artist }}</p>
<p><strong>Scrittore:</strong> {{ $comic->writers }}</p>

<a href="{{ route('comics.index') }}">Torna all'elenco Comics</a>
@endsection
