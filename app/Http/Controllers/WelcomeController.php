<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index($block = '')
    {
        return view('welcome', [
            'block' => $block,
        ]);
    }
}
