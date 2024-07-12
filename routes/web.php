<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//mostrare l'elenco di tutti i comics presenti nel database
Route::get('/', [ComicController::class, 'index'])->name('comics.index');

//mostrare il form per creare un nuovo comic
Route::get('/comics/create',  [ComicController::class, 'create'])->name('comics.create');

//salvare un nuovo comic nel database
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');

//mostrare il singolo comic
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
