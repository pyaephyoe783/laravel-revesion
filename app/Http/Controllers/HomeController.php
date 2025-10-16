<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'item1' => 'home1',
            'item1' => 'home1',
            'item1' => 'home1'
        ];

        return view('home',compact('data'));
    }

    public function contact(){
        $num1 = 3;
        $num2= 5;

        return view('contact',compact('num1','num2'));
    }

    public function about(){
        $message = "San Mal A Yan";

        return view('about',compact('message'));
    }
}
