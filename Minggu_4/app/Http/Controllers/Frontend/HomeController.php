<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller\frontend;

class HomeController extends Controller
{
    public function index()
    {
        // memanggil views frontend
        return view('frontend.home');
    }
}