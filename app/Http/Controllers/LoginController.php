<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        //echo "this is index function";
        return view ('login.index');
    }
    public function verify(Request $req){
        //dd($req);
        // echo "Username is: ".$req->uname. " & password is: ".$req->password;
        $req->session()->put('uname', $req->uname);
        //$uname= $req->session()->get('uname');

        if($req->uname == $req->password){
            //session or cookie
            return redirect('/home');

        } else{
            echo"Invalid credientials";
        }
    
    }
}

