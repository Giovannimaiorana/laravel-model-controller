<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function index() {
        return view('home');
    }
    public function Movie() {
        $movies = Movie::all();
        return view('listmovie',compact('movies'));
    }
}

