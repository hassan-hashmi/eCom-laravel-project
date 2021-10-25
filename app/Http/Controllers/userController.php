<?php

namespace App\Http\Controllers;
use Hash;
use session;
use Illuminate\Http\Request;

use App\Models\User;



class userController extends Controller
{
    // 
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
    if(!$user  || !Hash::check($req->password,$user->password))
    
    {
        return "UserName or Password doesn't matched";
    }
    else{
        $req->session()->put('user',$user);
        return redirect('/') ;
    }
    }
}
