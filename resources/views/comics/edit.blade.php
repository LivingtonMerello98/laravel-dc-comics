@extends('layouts.app')

@section('update')
<section class="">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <div class="col-md-12 text-center mb-3 ">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" alt="" class="w-100" style="max-width: 150px;">
                </div>
                <span class="mb-4 text-white text-uppercase">{{ $comic -> series}}</span>
                <h5 class="mb-4 text-white text-uppercase">{{ $comic -> title}}</h5>
                <p class="text-white">Make the final tweaks to your comic to make it perfect and ready to be shared with the world! Fill out the form below with the updated details.</p>
            </div>
        </div>
    
        <form action="{{ route('comics.store') }}" method="POST" id="comic-form">
            @csrf
            <div class="row justify-content-center">
    
                <div class="col-md-6  px-4 py-3 ">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{old('title', $comic->title)}}" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="description" id="description" rows="5" placeholder="Description" required>{{old('description', $comic->description)}}</textarea>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Image" value="{{old('thumb', $comic->thumb)}}" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{old('price', $comic-> price)}}" required>
                    </div>
                </div>
    
                <div class="col-md-6  px-4 py-3">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="series" id="series" placeholder="Series" value="{{old('series',$comic->series)}}" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{old('sale_date', $comic->sale_date)}}" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="type" id="type" required>
                            <option value="" disabled selected>Type</option>
                            <option value="comic book" {{ old('type', $comic->type) == 'comic book' ? 'selected' : '' }}>Comic Book</option>
                            <option value="graphic novel" {{ old('type', $comic->type) == 'graphic novel' ? 'selected' : '' }}>Graphic Novel</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="artists" id="artists" placeholder="Enter artists separated by comma" value="{{old('artists', $comic->artists)}}" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="writers" id="writers" placeholder="Enter writers separated by comma" value="{{old('artists', $comic->artists)}}" required>
                    </div>
                </div>
    
            </div>
    
            <div class="row justify-content-center mt-4">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Upload Comic</button>
                </div>
            </div>
        </form>
    </div>
</section>


@endsection