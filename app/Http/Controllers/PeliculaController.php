<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeliculaController extends Controller
{
    public function create()
    {
        return view ('create');
    }

    public function store(request $request)
    {
        
        
    }
}
