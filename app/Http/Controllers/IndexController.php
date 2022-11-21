<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

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
            <div style='display:flex'><img width='60' height='35' src='http://casacreditopromotora.com/logo-recortado.png' /><h3>Casa Crédito Promotora</h3></div>
            ";

        $header = "From: <info@casacreditopromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);
        
        $request->session()->flash('validGeneral', 'Se ha enviado el correo');

        return back();
    }

    public function sendMailCredito(Request $request){

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LdteCQjAAAAAHYC5-RLr5PvdHRI2ounwwUvnzxs',
            'response' => $request->input('g-recaptcha-response')
        ])->object();

        return $response;

        $to = "sebas31051999@gmail.com"; //info@casacredito.com
        $subject = "Solicitud de Crédito - Casa Credito Promotora";
        $message = "<br><strong>Lead Créditos</strong>
            <br>Cédula:" . strip_tags($request->cedula) ."
            <br>Nombre: " . strip_tags($request->nombre) ."
            <br>Teléfono: " . strip_tags($request->telefono_celular) ."
            <br>Email: " . strip_tags($request->correo) ."
            <br>Mensaje: " . strip_tags($request->mensaje) ."
            <br>Monto: $ " . strip_tags($request->monto) ."
            <br>Tipo de crédito: " . strip_tags($request->tipo_credito) ."
            <div style='display:flex'><img width='60' height='35' src='http://casacreditopromotora.com/logo-recortado.png' /><h3>Casa Crédito Promotora</h3></div>
            ";

        $header = "From: <info@casacreditopromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        if($response->success && $response->score >= 0.7){
            mail($to, $subject, $message, $header);
        } else {
            mail('sebas31051999@gmail.com', 'BOT LEAD CREDITOS PROMOTORA '.strip_tags($request->nombre), $message, $header);
        }
        
        $request->session()->flash('report', 'Se ha enviado el correo');

        return back();
    }

    public function sendMailContact(Request $request){
        $to = "info@casacredito.com,hserrano@casacredito.com";
        $subject = "Información de contacto - Casa Crédito Promotora";
        $message = "<br><strong>Información de contacto</strong>
        <br>Nombre: " . strip_tags($request->nombre) ."
        <br>Teléfono: " . strip_tags($request->telefono) ."
        <br>Email: " . strip_tags($request->email) . "
        <br>Interes: " . strip_tags($request->interes) . "
        <br>Operación: " . strip_tags($request->operacion) ."
        <br>Precio máximo: " . strip_tags($request->preciomaximo) ."
        <br>Población: " . strip_tags($request->ciudad) ."
        <br>Zona: " . strip_tags($request->zona) ."
        <br>Mensaje " . strip_tags($request->mensaje) ."
        <div style='display:flex'><img width='60' height='35' src='http://casacreditopromotora.com/logo-recortado.png' /><h3>Casa Crédito Promotora</h3></div>
        ";

        $header = "From: <info@casacreditopromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);

        $request->session()->flash('validContact', 'Se ha enviado el correo');

        return back();
    }

    public function sendSolicitudAvaluo(Request $request){
        $to = "info@casacredito.com,hserrano@casacredito.com"; //info@casacredito.com,hserrano@casacredito.com
        $subject = "Lead - Casa Crédito Promotora | " . substr(date(now()), 0, 10);
        $message = "<br><strong>Información de contacto</strong>
        <br>Nombre: " . strip_tags($request->name) ."
        <br>Teléfono: " . strip_tags($request->phone) ."
        <br>Email: " . strip_tags($request->email) . "
        <br>Comentario: " . strip_tags($request->comentario) ."
        <br>Interes: " . " Solicitud de avalúo " . "
        <br>Tipo de propiedad: " . strip_tags($request->type) ."
        <br>Provincia: " . strip_tags($request->state) ."
        <br>Ciudad: " . strip_tags($request->city) ."
        <br>Fuente: " . " Website Casa Crédito Promotora" ."
        ";

        $header = "From: <info@casacreditopromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);

        $request->session()->flash('report', 'Se ha enviado el correo');

        return back();
    }

    public function getCities($id){
        $cities = DB::connection('mysql2')->table('info_cities')->where('state_id',$id)->get(); 
        return response()->json($cities);   
    }
}
