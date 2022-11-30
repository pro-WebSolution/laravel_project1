<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    function homepage(){
        return view('home');
    }
    function show(){
        return view('admin.cat');
    }
    function insert(Request $req){
        $cat_name = $req->cat_name;
        return view('admin.cat', compact('cat_name'));
    }
}
