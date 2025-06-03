<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Repository;

Route::get('/', function () {
    $repos = Repository::orderBy('created_at', 'desc')->get();
    return view('index', compact('repos'));
});

Route::get('/contacto', function () {
    return view('contacto');
});
