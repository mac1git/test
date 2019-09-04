<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function contact()  // 追加
    {
        return "contact";  // (a) view 関数を使わず、テキストを返してみる
    }
}
