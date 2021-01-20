<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected function about()
    {
        return view("Profile");
        
    }
}
