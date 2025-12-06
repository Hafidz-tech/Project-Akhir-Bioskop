<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Film;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'filmsToday' => Film::whereDate('created_at', today())->get(),
        ]);
    }
}
