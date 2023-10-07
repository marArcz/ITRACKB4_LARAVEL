<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function show(){
        return view('student.profile');
    }
}
