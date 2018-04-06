<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.home');
    }
    public function _construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    
}
