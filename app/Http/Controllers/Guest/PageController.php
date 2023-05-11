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
    public function movie() {
        $movies = Movies::all();
        return view('listmovie');
    }
}

