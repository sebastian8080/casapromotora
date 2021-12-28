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
        $envio = Mail::to('sebas25211@hotmail.com')->send($correo);
    
        return "Mensaje enviado " . $envio;
    }

    public function sendMailCredito(Request $request){
        $to = "sebas25211@hotmail.com";
        $subject = "Solicitud de Crédito - Casa Credito Promotora";
        $message = "<br><strong>Lead Créditos</strong>
            <br>Cédula:" . strip_tags($request->cedula) ."
            <br>Nombre: " . strip_tags($request->nombre) ."
            <br>Teléfono: " . strip_tags($request->telefono_celular) ."
            <br>Email: " . strip_tags($request->correo) ."
            <br>Mensaje: " . strip_tags($request->mensaje) ."
            <br>Monto: $ " . strip_tags($request->monto) ."
            <br>Tipo de crédito: " . strip_tags($request->tipo_credito) ."
        ";

        $header = "From: <admin@casacreditopromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        if(mail($to, $subject, $message, $header)){
            return "Correo enviado con exito";
        } else {
            return "Error al enviar correo";
        }
        
    }
}
