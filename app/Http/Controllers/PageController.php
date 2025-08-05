<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function conference()
    {
        return view('conference');
    }

    public function attend()
    {
        return view('attend');
    }
}
