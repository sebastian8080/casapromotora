<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function redirectToArchitects(){
        return view('pages.partners-architects');
    }
}
