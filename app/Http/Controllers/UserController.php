<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function source()
    {
        return view('dashboard.source');
    }

    public function billing()
    {
        return view('dashboard.billing');
    }
}
