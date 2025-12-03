<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Film;

class FilmController extends Controller
{
    public function show($id)
{
    $film = Film::with('jadwals', 'genre')->findOrFail($id);

    return view('user.film.show', compact('film'));
}

}
