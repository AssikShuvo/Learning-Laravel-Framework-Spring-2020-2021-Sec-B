<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(){
        return view('Login.index');
    }

    public function verify(Request $req){

        $validation = Validator::make($req->all(), [
            
            'email' => 'required | max:50 | email',
            'password' => 'required | min:8 | max:20 | alpha_num'

        ]);

        if($validation->fails()){
            return redirect()->route('Login.login')->with('errors', $validation->errors());
        }


    }
}
