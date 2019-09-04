<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function contact()
    {
         return view("contact");  // (a) view 関数に変更
    }
}
