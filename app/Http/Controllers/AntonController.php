<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntonController extends Controller
{
    public function index() 
    {
        return view('anton.index', []);
    }
    public function medicare() 
    {
        return view('anton.medicare', []);
    }
}
