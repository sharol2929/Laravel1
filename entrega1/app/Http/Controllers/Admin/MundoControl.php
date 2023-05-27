<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MundoControl extends Controller
{
    public function traer_personajes(){
        return view('sobre_mundo.personajes');
    }

    public function traer_organizaciones(){
        return view('sobre_mundo.organizaciones');
    }

    public function traer_akuma(){
        return view('sobre_mundo.akuma_no_mi');
    }
}
