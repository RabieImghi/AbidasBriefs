<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;

class SaleController extends Controller
{
    public function index(){
        $sales = Sale::with('user')->with('product')->get();
        return view('orders', compact('sales'));
    }
}
