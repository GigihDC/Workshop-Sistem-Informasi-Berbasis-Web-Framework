<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request,
App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // memanggil views backend
        return view('backend.dashboard');
    }
}