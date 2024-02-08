<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Yajra\DataTables\DataTables;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $categories= Categorie::all();
        return view("index",compact('categories'));
    }
    
}
