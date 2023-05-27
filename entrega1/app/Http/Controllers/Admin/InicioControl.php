<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InicioControl extends Controller
{
    public function traer_inicio(){
        return view('index');
    }
}
