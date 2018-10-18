<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class shopingCartController extends Controller
{
     public function index()
    {
        return view('shopingCart');
    }
}
