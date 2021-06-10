<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;


class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function verify(Request $req){
        $req->session()->put('uname',$req->uname);
        $req->session()->put('password',$req->password);

        //$req->session()->flush(); // delete all
        //$req->session()->forget('uname'); // delete uname from session
        //$uname = $req->session()->pull('uname'); // Like cut

        //dd($req);
         // echo "posted";
    //dd($req); // debug purpose .. will show the request
    //value will be in request-> paramaeter-> array
    // echo $_POST['uname']; previuos method
    // echo "username is: ".$req->uname." & password is: ".$req->password; new method in laravel
        //if($req->password == 1234){
            //set session or cookie
             // echo "valid";
        // session or cokkie set here
        /*
            future work
        */
        if($req->uname == $req->password){
            return redirect('/home');
        }else{
            $req->session()->flash('msg','invalid username or password');
            //return view('login.index');
            return redirect('/login');
        }

    }
}



