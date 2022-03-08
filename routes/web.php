<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Le rotte non sono altro che il collegamento alla pagine web

// '/' percorso indirizzo della home
Route::get('/', function () {
    // la rotta mi restituisce la view la parte che vede l'utente
    return view('home');
    // nomino la view in questo caso 'home' si chiamerà ugualmente home.blade
})->name('homepage');
// ->name('homepage'); collego la homepage alle blade in resources e View

Route::get('/about', function () {
    // posso passare dei dati come array associativo con la variabile $data
    $data = [
        'title' => 'pagina about',
        'descrizione' => 'Concluso il percorso formativo ...'
    ];
    return view('about', $data);
})->name('chi-siamo');

Route::get('/contact', function () {
    // anche con un'altra Route posso sempre chiamarlo $data
    $data = [
        'title' => 'pagina contatti',
        'descrizione' => 'Contatti personali ...',
        'nomi' => ['pippo','pluto','paperino']
    ];
    return view('contatti', $data);
})->name('nostri-contatti');