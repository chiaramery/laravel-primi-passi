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

Route::get('/', function () {
    $title = "Primo esercizio con Laravel!";
    return view('welcome', compact("title"));
});
Route::get('/spesa', function () {
    $spesa = [
        "titoloSpesa" => "Spesa per venerdi",
        "lista" => [
            "latte",
            "crocchette",
            "biscotti",
            "pane",
            "acqua",
            "pomodori"
        ],
    ];
    return view('spesa', $spesa);
});

Route::get('/carrello', function () {
    $carrello = [
        "titolo" => "Cosa c'è nel carrello:",
        "check" => [
            "latte",
            "crocchette",
        ],
    ];
    return view('carrello', $carrello);
});

Route::get('/links', function () {
    $link = [
        "titoloLinks" => "Links:",
        "links" => [
            "/",
            "/spesa",
            "/carrello",
        ],
    ];
    return view('link', $link);
});
