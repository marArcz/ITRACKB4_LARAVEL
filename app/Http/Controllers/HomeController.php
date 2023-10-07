<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index($block = '')
    {
        return view('home', [
            'block' => $block,
        ]);
    }
}
