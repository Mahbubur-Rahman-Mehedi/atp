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
        ['id' => 1,'name'=>'mehedi','pass'=>'123'],
        ['id' => 2,'name'=>'rahman','pass'=>'1234'],
        ['id' => 3,'name'=>'mahbubur','pass'=>'1111'],
        ['id' => 4,'name'=>'me','pass'=>'3333'],
        ['id' => 5,'name'=>'saon','pass'=>'222']
       ];

       return view('user.userlist');
    }
}
