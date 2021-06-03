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
    // echo "posted";
    //dd($req); // debug purpose .. will show the request
    //value will be in request-> paramaeter-> array
    // echo $_POST['uname']; previuos method
    // echo "username is: ".$req->uname." & password is: ".$req->password; new method in laravel
    if( $req->password == "1234" ){
        // echo "valid";
        // session or cokkie set here
        /*
            future work
        */
        return redirect('/home');

    }
}


}
