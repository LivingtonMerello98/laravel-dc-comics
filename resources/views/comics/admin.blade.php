@extends('layouts.app')

@section('page-title')
    Admin Panel
@endsection

@section('admin')
    <div class="container-sm py-5">
        <div class="row">
            <table class="overflow-auto">
                <thead>
                    <tr>
                        <th scope="col"><span class="d-none d-sm-block text-white text-uppercase">Comic</span></th>
                        <th scope="col"><span class="d-none d-sm-block text-white mx-1 text-uppercase">Price</span></th>
                        <th scope="col" class="text-center"><span class="text-white text-uppercase">Action</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>
                                <div class="d-flex py-2">
                                    <div class="col-1">
                                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="w-100" style="min-width: 30px;">
                                    </div>
                                    <div class="col-1 flex-grow-1">
                                        <div class="ms-3">
                                            <p class="fw-semibold d-block text-white fw-bold">{{ $comic->series }}</p>
                                            <p class="text-secondary d-none d-xl-block text-white fw-lighter">{{ $comic->title }}</p>
                                            <p class="text-secondary d-none d-xl-block text-white fw-lighter">{{ $comic->sale_date }}</p>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex py-2">
                                    <span class="text-center d-none d-sm-block text-white">{{ $comic->price }}</span>
                                </div>
                            </td>
                            <td>
                                <div class="button-container d-flex justify-content-center">
                                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-outline-info btn-sm m-1">
                                        <i class="fa-solid fa-pencil"></i>
                                    </a>

                                    <form id="deleteForm{{ $comic->id }}" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="btn btn-outline-danger btn-sm m-1" data-toggle="modal" data-target="#confirmationModal{{ $comic->id }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </div>
                            </td>
                        </tr>

                        {{-- aggiungere la modale --}}
                        {{-- <!-- Modal di conferma per l'eliminazione del comic -->
                        <div class="modal fade" id="confirmationModal{{ $comic->id }}" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="confirmationModalLabel">Conferma Eliminazione</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare il comic "{{ $comic->title }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                                        <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('deleteForm{{ $comic->id }}').submit();">Elimina</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
