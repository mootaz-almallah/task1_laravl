<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prfofileController extends Controller
{
    public function indexfn(){
        return view("profile");
    }

    public function aboutfn(){
        return view("about");
    }
    public function contactfn(){
        return view("contact");
    }
}
