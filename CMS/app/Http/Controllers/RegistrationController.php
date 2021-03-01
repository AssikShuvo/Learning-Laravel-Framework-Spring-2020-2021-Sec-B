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

            'full_name' => 'required | min:3 | max:30 | alpha',
            'user_name' => 'required',
            'email' => 'required | min:10 | max:50 | email',
            'password' => 'required | min:8 | max:20 | alpha_num',
            'cpassword' => 'required | same:password',
            'address' => 'required',
            'company_name' => 'required | min:3 | max:20',
            'phone' => 'required | min:11 | max:15',
            'city' => 'required | min:3 | max:20',
            'country' => 'required | min:3 | max:20'

        ]);

        if($validation->fails()){
            return redirect()->route('Registration.registration')->with('errors', $validation->errors());
        }

        $cus = new customer();
        $cus->full_name = $req->full_name;
        $cus->user_name = $req->user_name;
        $cus->email = $req->email;
        $cus->password = $req->password;
        $cus->company_name = $req->company_name;
        $cus->phone = $req->phone;
        $cus->city = $req->city;
        $cus->country = $req->country;

        $cus->save();
       

        return redirect()->route('Login.login');
    }
}
