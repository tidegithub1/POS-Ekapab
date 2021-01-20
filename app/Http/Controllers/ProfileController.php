<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function about($id){
        $data[] = "";
        $data['error'] = "";
        $data['user'] = User::where('id', $id)->first();

        return view("viewpdt.profile", $data);
    }
}
