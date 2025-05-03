<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProdiController extends Controller 
{
    public function index(): view {
         return view("prodi.index");
    }
       
    
}
