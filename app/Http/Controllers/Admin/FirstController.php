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
        return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
    }

    public function contact(){
        return view('/contact');
    }

    //country method//
    public function country(){
        return response('hello world');
    }


    public function store(Request $request){
        dd($request->all());
    }

    public function aboutstore(Request $request){
        dd($request->all());
    }


}
