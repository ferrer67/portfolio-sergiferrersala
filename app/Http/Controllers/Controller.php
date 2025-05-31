<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        $jobs = Job::paginate(10); // 10 elementos por página
        return view('jobs.index', compact('jobs'));
    }
}
