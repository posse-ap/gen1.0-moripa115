<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuizyController extends Controller
{
    public function index(){
        return view('kuizy');
    }

    public function kuiz1(){
        return view('kuizyTokyo');
    }
    public function kuiz2(){
        return view('kuizyHiroshima');
    }
}
