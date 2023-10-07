<?php

namespace App\Http\Controllers\Clerk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClerkProfileController extends Controller
{
    public function show(){
        return view('clerk.profile');
    }
}
