<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    //    echo "I am Home";
    // return view('home.index')->with('id','123');
    // return view('home.index')->with('id',$id);
    // return view('home.index')->withId('123')
    //         ->withName('Mehedi');

    // return view('home.index', ['id'=>123, 'name'=>'Mehedi']);

    $id = 123;
    $name = 'Mehedi';
    return view('home.index', compact('id','name'));
   }
}
