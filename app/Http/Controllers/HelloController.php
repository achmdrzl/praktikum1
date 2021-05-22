<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        return view("home_0281");
    }

    public function artikel(){
    	return view("artikel_0281");
    }
    public function contact(){
    	return view("contact_0281");
    }
    
}
