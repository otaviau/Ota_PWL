<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function hello(){
        return 'Hello World';
    }

    public function greeting(){
        // return view('blog.hello', ['name' => 'Andi']);
        return view ('blog.hello')
            ->with('name', 'Andi')
            ->with('occupation', 'Astronout');
    }

}
