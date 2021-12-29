<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function redirectToHome(){
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

    //info@casacredito.com,hserrano@casacredito.com

    public function store(Request $request){
        $to = "info@casacredito.com,hserrano@casacredito.com";
        $subject = "Información en General - Casa Credito Promotora";
        $message = "<br><strong>Información general</strong>
            <br>Nombre: " . strip_tags($request->nombre) ."
            <br>Teléfono: " . strip_tags($request->telefono_celular) ."
            <br>Email: " . strip_tags($request->correo) ."
            <br>Mensaje: " . strip_tags($request->mensaje) ."
        ";

        $header = "From: <admin@casacreditopromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);
        
        $request->session()->flash('validGeneral', 'Se ha enviado el correo');

        return back();
    }

    public function sendMailCredito(Request $request){
        $to = "info@casacredito.com,hserrano@casacredito.com";
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

        mail($to, $subject, $message, $header);
        
        $request->session()->flash('report', 'Se ha enviado el correo');

        return back();
    }
}
