<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with('category')->get();
        $categories = Categorie::all();
        return view("product",compact('products','categories'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);
        Product::create($validatedData);
        return redirect('/Products')->with('success', 'User created successfully!');

    }

}
