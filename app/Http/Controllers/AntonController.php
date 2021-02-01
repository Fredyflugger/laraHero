<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntonController extends Controller
{
    public function index() 
    {
        $title = 'Nebogatov Anton';
        return view('anton.index', ['title' => $title]);
    }
}
