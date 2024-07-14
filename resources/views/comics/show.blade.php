@extends('layouts.app')

@section('details')

    <div class="container py-5">
        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center  ">
                <div>
                    <div class="img-container">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="text-container">
                    <h1 class="text-white">{{ $comic->title }}</h1>
                </div>
                <p class="text-white line-height"><strong>Descrizione:</strong> {{ $comic->description }}</p>
                <p class="text-white"><strong>Price:</strong> {{ $comic->price }}</p>
                <p class="text-white"><strong>Serie:</strong> {{ $comic->series }}</p>
                <p class="text-white"><strong>Data di uscita:</strong> {{ $comic->sale_date }}</p>
                <p class="text-white"><strong>Genere:</strong> {{ $comic->type }}</p>

                <div class="d-flex">
                    <div class="col">
                        <p class="text-white"><strong>Artisti:</strong></p>
                <ul>
                    @foreach($comic->artists as $artist)
                        <li class="text-white">{{ $artist }}</li>
                    @endforeach
                </ul>
                    </div>
                    <div class="col">
                        <p class="text-white"><strong>Scrittori:</strong></p>
                <ul>
                    @foreach($comic->writers as $writer)
                        <li class="text-white">{{ $writer }}</li>
                    @endforeach
                </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
