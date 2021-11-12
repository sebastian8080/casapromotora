<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function redirectToProject1(){
        return view('pages.project');
    }
}
