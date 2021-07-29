<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
       $items = DB::select('select * from people');
       return view('hello.inddex', ['items'=>$items]);
    }

}