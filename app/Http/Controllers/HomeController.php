<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\comic;

class HomeController extends Controller
{
    public function home() {

        // $movies = Movie::all();

        return view('pages.home');
    }
}
