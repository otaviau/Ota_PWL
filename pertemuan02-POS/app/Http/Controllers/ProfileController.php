<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function Index($id, $name){
        return view ('profile', [$id], [$name]);
    }
}
