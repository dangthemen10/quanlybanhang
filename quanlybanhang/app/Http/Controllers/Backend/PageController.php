<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\ActivationMailer;

class PageController extends Controller
{
    public function dashboard(){
        return view('backend.pages.dashboard');
    }
    public function testMail() {
        // phanhaidangkgumt@gmail.com  => dangb1609515@student.ctu.edu.vn
        Mail::to('dangb1609515@student.ctu.edu.vn')
            ->send(new ActivationMailer([]));
    }
}
