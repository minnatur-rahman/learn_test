<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\SecondController;
class FirstController extends Controller
{

    public function index(){
        return view('welcome');
    }

    public function about(){
        return response("hello world");
    }

    public function contact(){
        return view('/contact');
    }

    //country method//
    public function country(){
        return view('country');
    }


    //laravel method//
    public function laravel(){
        return view('laravel');
    }

    //student store
    public function store(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;

        //database a store

        // return redirect()->action([SecondController::class, 'test']);

        return redirect()->back()->with('success', 'Student Inserted!');

    }

    public function aboutstore(Request $request){
        dd($request->name);
    }


}
