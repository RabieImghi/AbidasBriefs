<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
class AuthController extends Controller
{
    public function login(){
        return view("Auth.login");
    }
    public function Register(){
        return view("Auth.register");
    }
    public function ForgetPassword(){
        return view("Auth.reset");
    }
    public function loginUser(Request $request){
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $res = User::where('email',$validatedData['email'])->where('password',$validatedData['password'])->get();
        if($res->count() != 0){
            // $role = Role::where('name','user')->First();
            // $res->roles()->attach($role);
            // dd($role->roles);
            return redirect('/Home');
        } 
        else return redirect('/Login');
        
    }
}
