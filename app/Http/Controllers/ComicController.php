<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all(); //comando prendi tutti i comics dalla tab comics
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validazione dei dati
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'artists' => 'required|string',
            'writers' => 'required|string',
            'type' => 'required'
        ]);

        // Espando i nomi degli artisti e degli scrittori in array
        $artists = explode(', ', $request->input('artists'));
        $writers = explode(', ', $request->input('writers'));

        // Salva i dati nel modello Comic
        $comic = new Comic();
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->sale_date = $request->input('sale_date');
        $comic->artists = json_encode($artists);
        $comic->writers = json_encode($writers);
        $comic->type = $request->input('type');

        $comic->save(); // Salva il modello nel database

        return redirect()->route('comics.index')->with('success', 'Comic inserito con successo.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);

        // Decodifica solo se necessario
        if (is_string($comic->artists)) {
            $comic->artists = json_decode($comic->artists, true);
        }
        if (is_string($comic->writers)) {
            $comic->writers = json_decode($comic->writers, true);
        }

        return view('comics.show', compact('comic'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    //metodo per la pagina admin
    public function adminIndex()
    {
        $comics = Comic::all();
        return view('comics.admin', compact('comics'));
    }
}
