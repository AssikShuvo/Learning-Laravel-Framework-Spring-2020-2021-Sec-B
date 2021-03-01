<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function registration(){
        return view('Registration.index');
    }

    public function store(Request $req){

        $validation = Validator::make($req->all(), [

            'fullname' => 'required | min:3 | max:30 | alpha',
            'username' => 'required',
            'email' => 'required | min:10 | max:50 | email',
            'password' => 'required | min:8 | max:20 | alpha_num',
            'cpassword' => 'required | same:password',
            'address' => 'required',
            'cname' => 'required | min:3 | max:20',
            'pnumber' => 'required | min:11 | max:15',
            'city' => 'required | min:3 | max:20',
            'country' => 'required | min:3 | max:20'

        ]);

        if($validation->fails()){
            return redirect()->route('Registration.registration')->with('errors', $validation->errors());
        }

        $cus = new customer();
        $cus->fullname = $req->fullname;
        $cus->username = $req->username;
        $cus->email = $req->email;
        $cus->password = $req->password;
        $cus->cname = $req->cname;
        $cus->pnumber = $req->pnumber;
        $cus->city = $req->city;
        $cus->country = $req->country;
       

        return redirect()->route('Login.login');
    }
}
