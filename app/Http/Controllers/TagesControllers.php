<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tage;

class TagesControllers extends Controller
{
    public function index(){
        $categories = Tage::all();
        return view("tages",compact('tages'));
    }
}
