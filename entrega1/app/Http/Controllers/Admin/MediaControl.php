<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaControl extends Controller
{
    public function traer_anime(){
        return view('sobre_media.anime');
    }

    public function traer_manga(){
        return view('sobre_media.manga');
    }
}
