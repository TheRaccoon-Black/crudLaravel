<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view("products.index",["products"=>$products]);
    }

    public function create(){
        return view("products.create");
    }
    public function store(Request $request){
        $data = $request->validate([
            "name"=> "required",
            "price"=> "required|numeric|between:0,999999.99", // Ensure price is numeric and within a reasonable range
            "qty" => "required|integer|min:0", // Ensure qty is an integer and non-negative
            "description" => "required",
        ]);

        $product = Product::create($data);

        return redirect(route("product.index"));
    }
    public function edit(Product $product){
        return view("products.edit",["product"=>$product]);
    }

    public function update(Request $request, Product $product){
        $data = $request->validate([
            "name"=> "required",
            "price"=> "required|numeric|between:0,999999.99", // Ensure price is numeric and within a reasonable range
            "qty" => "required|integer|min:0", // Ensure qty is an integer and non-negative
            "description" => "required",
        ]);
        $product->update($data);
        return redirect(route("product.index"))->with('success','product update successfully');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect(route("product.index"))->with('delete','product update successfully');
    }
}
