<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function existing_products(){
        return view('Products.existing_products');
    }

    public function upcoming_products(){
        return view('Products.upcoming_products');
    }

    public function add_products(){
        return view('Products.add_products');
    }
}
