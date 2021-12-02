<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function redirectToHome(){
        // $projects = DB::table('projects')->get();
        return view('pages.home');
    }

    public function redirectToAbout(){
        return view('pages.about');
    }

    public function redirectToContact(){
        return view('pages.contact');
    }

    public function redirectToPartners(){
        return view('pages.partners');
    }

    public function redirectToProjects(){
        return view('pages.projects');
    }

    public function redirectToBlog(){
        return view('pages.news');
    }

    public function store(Request $request){
        $correo = new ContactanosMailable($request->all());
        Mail::to('sebas25211@hotmail.com')->send($correo);
    
        return "Mensaje enviado";
    }
}
