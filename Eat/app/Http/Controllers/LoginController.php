<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('FolderDatabase.Login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/gedung/fash');
        }
        return redirect('/');
    }
}
