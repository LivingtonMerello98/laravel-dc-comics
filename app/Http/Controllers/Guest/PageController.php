<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //metodo per la pagina admin
    public function index()
    {
        $comics = Comic::all();
        return view('comics.admin', compact('comics'));
    }
}
