<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    //
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function skill()
    {
        return view('pages.skill');
    }

    public function prolang()
    {
        return view('pages.prolang');
    }

}
