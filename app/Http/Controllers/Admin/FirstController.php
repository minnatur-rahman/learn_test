<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function index(){
        return view('contact');
    }

    public function indexx(){
        return view('about');
    }

    //country method//
    public function country(){
        return view('country');
    }


}
