<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IletisimController extends Controller
{
    public function index(){
        return view('iletisim');
    }
}
