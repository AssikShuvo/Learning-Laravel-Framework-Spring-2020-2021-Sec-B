<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function existing_products(){
        return view('Products.existing_products');
    }

    public function product_list(){  
                
        $product_list = product::where('status', '=' , 'existing')->get();

        return view('Products.existing_products')->with('product_list', $product_list);
    }

    public function upcoming_products(){
        return view('Products.upcoming_products');
    }

    public function add_products(){
        return view('Products.add_products');
    }


}
