<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
 function index()
{
    return view('pages.index');
}

function about()
{
    return view('pages.about');
}

function skill()
{
    return view('pages.skill');
}

function prolang()
{
    return view('pages.prolang');
}


}
