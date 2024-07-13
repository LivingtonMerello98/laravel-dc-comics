@extends('layouts.app')

@section('form')
    <h1>Crea nuovo Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST" id="comic-form">
        @csrf
        <label for="title">Titolo:</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="description">Descrizione:</label>
        <textarea name="description" id="description" required></textarea><br><br>

        <label for="thumb">Immagine:</label>
        <input type="text" name="thumb" id="thumb" required><br><br>

        <label for="price">Prezzo:</label>
        <input type="text" name="price" id="price" required><br><br>

        <label for="series">Serie:</label>
        <input type="text" name="series" id="series" required><br><br>

        <label for="sale_date">Data di uscita:</label>
        <input type="date" name="sale_date" id="sale_date" required><br><br>

        <label for="type">Tipo:</label>
        <select name="type" id="type" required>
            <option value="comic book">Comic Book</option>
            <option value="graphic novel">Graphic Novel</option>
        </select><br><br>

        <label for="artists">Artisti:</label>
        <input type="text" name="artists" id="artists" required placeholder="Inserisci artisti separati da virgola"><br><br>

        <label for="writers">Scrittori:</label>
        <input type="text" name="writers" id="writers" required placeholder="Inserisci scrittori separati da virgola"><br><br>

        <button type="submit">Crea</button>
    </form>

    <a href="{{ route('comics.index') }}">Torna all'elenco Comics</a>

    <script src=""></script>
@endsection
