<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actionController extends Controller
{
    public function index($id){
        return view('confirm')->with('id',$id);
    }
}
