<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('/contact');
    }

    //country method//
    public function country(){
        return view('country');
    }


    public function store(Request $request){
        dd($request->all());
    }

    public function aboutstore(Request $request){
        dd($request->all());
    }


}
