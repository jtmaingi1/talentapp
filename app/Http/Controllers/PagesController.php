<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Create a Method or Function
    public function index(){
        return view('pages.index');
    }

    public function aboutus(){
        return view('pages.about');
    }
    public function contact(){
        return view('pages.contact');
    }
}
