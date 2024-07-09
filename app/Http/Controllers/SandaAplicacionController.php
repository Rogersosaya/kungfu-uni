<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SandaAplicacionController extends Controller
{
    public function index(){

        return view('sanda.aplicacion');
    }
}
