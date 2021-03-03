<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMPController extends Controller
{
    public function physical_store(){
        return view('SMP.physical_store');
    }

    public function social_media(){
        return view('SMP.social_media');
    }

    public function ecommerce(){
        return view('SMP.ecommerce');
    }
}
