<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function php(){
        return view('php');
    }
    public function laravel(){
        return view('laravel');
    }
}
