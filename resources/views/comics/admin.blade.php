@extends('layouts.app')

@section('page-title')
admin panel
@endsection

@section('admin')

    <div class="container-sm py-5">
        <div class="row">

            <table class=" overflow-auto">
                <thead>
                    <tr>
                        <th scope="col"><span class=" d-none d-sm-block text-white text-uppercase">comic</span></th>
                        <th scope="col"><span class="d-none d-sm-block text-white mx-1 text-uppercase">price</span></th>
                        {{-- <th scope="col"><span class="d-none d-md-block text-white">Stato</span></th> --}}
                        <th scope="col" class="text-center"><span class="text-white text-uppercase">action</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $comics as $comic )
                    <tr>
                        <td>
                            <div class="d-flex py-2">
                                <div class="col-1">
                                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" alt="" class="w-100" style="min-width: 30px;">
                                </div>
                                <div class="col-1 flex-grow-1">
                                    <div class="ms-3">
                                        <span class="fw-semibold d-block text-white">{{ $comic->series }}</span>
                                        <span class="text-secondary d-none d-xl-block">{{ $comic->title }}</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex py-2">
                                <span class=" text-center d-none d-sm-block text-white">{{ $comic->price }}</span>
                            </div>
                        </td>
                        {{-- <td>
                            <div class="button-container d-flex justify-content-center">
                                 <button type="button" class="btn btn-outline-success btn-sm m-1 rounded-circle d-none d-md-block">
                                    <i class="fa-solid fa-check"></i>
                                </button> 
                            </div>
                        </td> --}}
                        <td>
                            <div class="button-container d-flex justify-content-center">
                            <a href={{ route('comics.edit', $comic->id) }}>
                                <button type="button" class="btn btn-outline-primary btn-sm m-1">
                                    <i class="fa-solid fa-pencil"></i>
                                </button>
                            </a>
                                <a href="">
                                    <button type="button" class="btn btn-outline-danger btn-sm m-1" data-toggle="modal" data-target="#confirmationModal">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection