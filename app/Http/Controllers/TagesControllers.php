<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tage;

class TagesControllers extends Controller
{
    public function index(){
        $tages = Tage::all();
        return view("tages",compact('tages'));
    }
    public function add(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|unique:tages,name',
        ]);
        Tage::create($validatedData);
        return redirect('/Tags');
    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|unique:tages,name',
        ]);
        Tage::where('id',$id)->update([
            'name'=> $validatedData['name'],
        ]);
        return redirect('/Tags');
    }
}
