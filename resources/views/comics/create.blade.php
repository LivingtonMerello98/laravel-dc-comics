@extends('layouts.app')

@section('form')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-12 text-center">
            <h3 class="mb-4 text-white text-uppercase">Insert your comic at the store</h3>
            <p class="text-white">Fill out the form below to add your comic to our collection and share it with the world!</p>
        </div>
    </div>

    <form action="{{ route('comics.store') }}" method="POST" id="comic-form">
        @csrf
        <div class="row justify-content-center">

            <div class="col-md-6  px-4 py-3 ">
                <div class="mb-3">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="description" id="description" rows="5" placeholder="Description" required></textarea>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Image" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="price" id="price" placeholder="Price" required>
                </div>
            </div>

            <div class="col-md-6  px-4 py-3">
                <div class="mb-3">
                    <input type="text" class="form-control" name="series" id="series" placeholder="Series" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" name="sale_date" id="sale_date" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="type" id="type" required>
                        <option value="" disabled selected>Type</option>
                        <option value="comic book">Comic Book</option>
                        <option value="graphic novel">Graphic Novel</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="artists" id="artists" placeholder="Enter artists separated by comma" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="writers" id="writers" placeholder="Enter writers separated by comma" required>
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
@endsection
