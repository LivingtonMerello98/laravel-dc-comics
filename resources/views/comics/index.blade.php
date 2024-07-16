@extends('layouts.app')

@section('page-title')
home
@endsection

@section('hero')
<div class="hero">
    <div class="container">
        <button class="cta-fill py-2 px-3 fw-bolder ">current series</button>
    </div>
</div>
@endsection
  
@section('all_comics')

<div class="container bg-light-grey py-5">
    <div class="row">

        {{-- <div class="col-md-12 py-3">
            <h2 class="text-white text-uppercase">new release!</h2>
        </div> --}}

        <ul class="d-flex justify-content-center flex-wrap list-unstyled">
            @foreach ($comics as $comic)
                <li class="col-md-2 mb-4">
                    <a href="{{ route('comics.show', $comic->id) }}" class="card-link">
                        <div class="card-custom mx-3">
                            <div class="card-image">
                                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            </div>
                            <div class="card-body text-center">
                                <p class="card-title fs-6 text-uppercase text-white">{{ $comic->series }}</p>
                                {{-- <span class="card-title fs-6 text-uppercase text-white">{{ $comic->price }}</span> --}}
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="col-md-12 text-center">
            <button class="btn-custom text-uppercase fw-bolder">load more</button>
        </div>
    </div>
</div>

@endsection





{{-- href="{{ route('comics.show', $comic->id) }}" --}}

{{-- href="{{ route('comics.create') }}" --}}