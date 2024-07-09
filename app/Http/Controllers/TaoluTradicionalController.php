<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaoluTradicionalController extends Controller
{
    public function index(){

        return view('taolu.tradicional.juezb');
    }
}
