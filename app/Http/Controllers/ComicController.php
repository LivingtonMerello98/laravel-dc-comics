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
        //validazione dei dati
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'artist' => 'required',
            'writers' => 'required',
            'type' => 'required'
        ]);

        $comic = new Comic();
        $comic->title = $request->input('title');
        $comic->description = $request->input('description');
        $comic->thumb = $request->input('thumb');
        $comic->price = $request->input('price');
        $comic->series = $request->input('series');
        $comic->sale_date = $request->input('sale_date');
        $comic->artist = $request->input('artist');
        $comic->writers = $request->input('writers');
        $comic->type = $request->input('type');

        $comic->save(); // Salva i dati nel database

        //la rotta può essere modificata
        return redirect()->route('comics.index')->with('success', 'Comic inserito con successo.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //restituisce il modello pasta utilizzando l id
    {
        $comic = Comic::findOrFail($id); // Trova il comic specifico
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
}
