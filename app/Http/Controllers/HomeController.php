<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home0260");
    }

    public function contact(){
        return view("contact0260");
    }

    public function materi(){
        return view("materi0260");
    }
}
