<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    //
    public function index($name = 'default', $age = null) {
        return view('about', [
            'name' => $name,
            'age' => $age,
        ]);
    }
}
