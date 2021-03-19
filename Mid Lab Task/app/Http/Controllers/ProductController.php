<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function buttons(){
        return view('Products.home');
    }

    public function product_list(){  
                
        $product_list = product::where('status', '=' , 'existing')->paginate(20);                                

        return view('Products.existing_products')->with('product_list', $product_list);
    }

    public function product_edit($id){

        $product_list = product::find($id);

        return view('Products.edit')->with('product_list', $product_list);
    }


    public function product_update($id, Request $req){

        $product_list = product::find($id);

        $product_list->product_name = $req->product_name;
        $product_list->category = $req->category;
        $product_list->unit_price = $req->unit_price;
        $product_list->status = $req->status;

        $validation = Validator::make($req->all(), [
            
            'product_name' => 'required | min:5 | max:30 | alpha',
            'category' => 'required ',
            'unit_price' => 'required | numeric | gt:0',
            'status' => 'required'

        ]);

        if($validation->fails()){
            return redirect()->route('Product.edit', [$id])->with('errors', $validation->errors());
        }

        $product_list->save();

        return Redirect('/system/product_management/existing_products')->with('message', 'Completed Successfully.');
    }

    public function product_delete($id){

        $product_list = product::find($id);

        return view('Products.delete')->with('product_list', $product_list);
    }

    public function product_destroy($id){
        if(product::destroy($id)){
            return redirect('/system/product_management/existing_products');
        }
        else{
            return redirect('/system/product_management/existing_products'.$id);
        }        
    }

    public function details($id){

        $product_list = product::find($id);

        return view('Products.details')->with('product_list', $product_list);
    }

    public function add_product(){
        return view('Products.add_product');
    }

    public function store_product(Request $req){

        $product = new product();

        $product->product_name = $req->product_name;
        $product->category = $req->category;
        $product->unit_price = $req->unit_price;
        $product->status = $req->status;
        $product->last_updated = $req->last_updated;

        $product->save();

        return redirect('/system/product_management');
    }




//////////////////////////////////// Upcoming Products /////////////////////////////////////////


    public function upcoming_products(){

        $product_list = product::where('status', '=' , 'upcoming')->paginate(20);                                

        return view('Upcoming_Products.upcoming_products')->with('product_list', $product_list);
    }

    public function upcoming_product_edit($id){

        $product_list = product::find($id);

        return view('Upcoming_Products.edit')->with('product_list', $product_list);
    }


    public function upcoming_product_update($id, Request $req){

        $product_list = product::find($id);

        $product_list->product_name = $req->product_name;
        $product_list->category = $req->category;
        $product_list->unit_price = $req->unit_price;
        $product_list->status = $req->status;

        $validation = Validator::make($req->all(), [
            
            'product_name' => 'required | min:5 | max:30 | alpha',
            'category' => 'required ',
            'unit_price' => 'required | numeric | gt:0',
            'status' => 'required'

        ]);

        if($validation->fails()){
            return redirect()->route('Upcoming_Product.edit', [$id])->with('errors', $validation->errors());
        }

        $product_list->save();

        return Redirect('/system/product_management/upcoming_products')->with('message', 'Completed Successfully.');
    }


}
