<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenu sur Bitsound v2.0';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $services = ['Articles', 'Artists', 'Festivals'];
        return view('pages.about')->with('services', $services);
    }

    public function articles(){
        return view('pages.articles');
    }

    public function artists(){
        return view('pages.artists');
    }

    public function festivals(){
        return view('pages.festivals');
    }

    public function contact(){
        return view('pages.contact');
    }
}
