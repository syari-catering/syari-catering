<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        return view('admin/main');
    }
    public function kitchen_crew()
    {
        return view('kitchen_crew/main');
    }
}
