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
        return response("hello world");
    }

    public function contact(){
        return view('/contact');
    }

    //country method//
    public function country(){
        return view('country');
    }

    //student store
    public function store(Request $request){
        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;

        //database a store

        return redirect()->route('about.us');

    }

    public function aboutstore(Request $request){
        dd($request->name);
    }


}
