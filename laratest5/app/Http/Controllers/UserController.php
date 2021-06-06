<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        // echo " add User";
        return view('user.create');
    }

    public function all()
    {
        echo " all";
    }
    public function list()
    {
       $users =[
        ['id' => 1,'username'=>'mehedi','email'=>'123@he'],
        ['id' => 2,'username'=>'rahman','email'=>'1234@hi'],
        ['id' => 3,'username'=>'mahbubur','email'=>'1111@gi'],
        ['id' => 4,'username'=>'me','email'=>'3333@no'],
        ['id' => 5,'username'=>'saon','email'=>'222@ok']
       ];

    //    return view('user.userlist');

    return view('user.userlist')->with('userlist',$users); // sending users array as userlist name

    }

    public function details($id){
        echo $id;

    }

    public function edit(){

    }

    public function delete(){

    }

}
