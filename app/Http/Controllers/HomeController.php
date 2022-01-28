<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\comic;

class HomeController extends Controller
{
    public function home() {

        $Comics = comic::all();

        return view('pages.home', compact('Comics'));
    }

    public function comic($id) {

        $comic = comic::findOrFail($id);

        return view('pages.comic', compact('comic'));
    }

}
