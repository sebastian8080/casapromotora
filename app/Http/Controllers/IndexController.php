<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use App\Models\Project\Category;
use App\Models\Project;

class IndexController extends Controller
{
    //public $baseurl = "http://localhost/acasaweb-master/public/api/";
    //http://localhost/acasaweb-master/public/
    //https://casacredito.com/api
    //public $header = ['api-key' => 'Cc2022*@Notify'];

    public function redirectToHome(){
        $departments = Category::where('type', 'Departamentos')->where('status', 1)->take(3)->get();
        $condominios = Category::where('type', 'Condominios')->where('status', 1)->take(3)->get();
        return view('pages.home', compact('departments', 'condominios'));
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
        // $baseurl = "https://casacredito.com/api/projects";
        // $listingsprojects = Http::withHeaders($this->header)->get($this->baseurl."/projects");
        // $listingsprojects = json_decode($listingsprojects);
        $projects = Category::where('status', 1)->get();
        return view('pages.projects', compact('projects'));
    }

    public function showproject($slug){
        // $listing = Http::withHeaders($this->header)->get($this->baseurl."/project/".$slug);
        // $listing = json_decode($listing, false);
        return view('pages.project');
    }

    public function redirectToBlog(){
        return view('pages.news');
    }

    //info@casacredito.com,hserrano@casacredito.com

    public function store(Request $request){
        $to = "promotoracasacredito@gmail.com";
        $subject = "Información en General - Casa Promotora";
        $message = "<br><strong>Información general</strong>
            <br>Nombre: " . strip_tags($request->nombre) ."
            <br>Teléfono: " . strip_tags($request->telefono_celular) ."
            <br>Email: " . strip_tags($request->correo) ."
            <br>Mensaje: " . strip_tags($request->mensaje) ."
            ";

        if($request->interest) $message .= "<br>Interes: Proyecto " . strip_tags($request->interest );
        
        $message .= "<div style='display:flex'><img width='60' height='35' src='http://casacreditopromotora.com/logo-recortado.png' /><h3>Casa Crédito Promotora</h3></div>";

        $header = "From: <info@casapromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);
        mail('sebas31051999@gmail.com', $subject, $message, $header);
        
        $request->session()->flash('validGeneral', 'Se ha enviado el correo');

        return back();
    }

    public function sendMailCredito(Request $request){

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LdteCQjAAAAAHYC5-RLr5PvdHRI2ounwwUvnzxs',
            'response' => $request->input('g-recaptcha-response')
        ])->object();

        $to = "sebas31051999@gmail.com"; //info@casacredito.com
        $subject = "Solicitud de Crédito - Casa Credito Promotora";
        $message = "<br><strong>Lead Créditos</strong>
            <br><b>Cédula:</b>" . strip_tags($request->cedula) ."
            <br><b>Nombre:</b> " . strip_tags($request->nombre) ." ". strip_tags($request->apellido) ."
            <br><b>Teléfono:</b> " . strip_tags($request->telefono_celular) ."
            <br><b>Email:</b> " . strip_tags($request->correo) ."
            <br><b>Mensaje:</b> " . strip_tags($request->mensaje) ."
            <br><b>Monto:</b> $" . strip_tags($request->monto) ."
            <br><b>Tipo de crédito:</b> " . strip_tags($request->tipo_credito) ."
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
        $to = "info@casacredito.com,promotoracasacredito@gmail.com";
        $subject = "Información de contacto - Casa Promotora";
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

        $header = "From: <info@casapromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);

        $request->session()->flash('validContact', 'Se ha enviado el correo');

        return back();
    }

    public function sendSolicitudAvaluo(Request $request){
        $to = "info@casacredito.com"; //info@casacredito.com,hserrano@casacredito.com
        $subject = "Lead - Casa Crédito Promotora | " . strip_tags($request->name);
        $message = "<br><strong>Información de contacto</strong>
        <br><b>Nombre:</b> " . strip_tags($request->name) . " " .strip_tags($request->lastname)."
        <br><b>Teléfono:</b> " . strip_tags($request->phone) ."
        <br><b>Email:</b> " . strip_tags($request->email) . "
        <br><b>Comentario:</b> " . strip_tags($request->comentario) ."
        <br><b>Interes:</b> " . " Solicitud de avalúo " . "
        <br><b>Tipo de propiedad:</b> " . strip_tags($request->type) ."
        <br><b>Provincia:</b> " . strip_tags($request->state) ."
        <br><b>Ciudad:</b> " . strip_tags($request->city) ."
        <br><b>Fuente:</b> " . " Website Casa Crédito Promotora" ."
        ";

        $header = "From: <lead_avaluo@casacreditopromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);

        $request->session()->flash('report', 'Se ha enviado el correo');

        return back();
    }

    public function sendlead(Request $request){

        $to = "info@casacredito.com,promotoracasacredito@gmail.com";
        $subject = "Lead - Casa Crédito Promotora | ". $request->name;
        $message = "<br><strong>Información de contacto</strong>
            <br><b>Nombre:</b> " . strip_tags($request->name) . " " .strip_tags($request->lastname)."
            <br><b>Teléfono:</b> " . strip_tags($request->phone) ."
            <br><b>Email:</b> " . strip_tags($request->email) . "
            <br><b>Proyecto:</b> " . strip_tags($request->type) ."
            <br><b>Ciudad:</b> " . strip_tags($request->city) ."
            <br><b>Mensaje:</b> " . strip_tags($request->comment) . " 
            <br><b>Fuente:</b> " . " Website Casa Crédito Promotora" . "
        ";

        $header =   "From: <lead_proyectos@casapromotora.com>" . "\r\n" .
                    "MIME-Version: 1.0" . "\r\n" .
                    "Content-Type:text/html;charset=UTF-8" . "\r\n";

        mail($to, $subject, $message, $header);

        return redirect()->back()->with('status', 'Se ha enviado la información');
    }

    public function getCities($id){
        $cities = DB::connection('mysql2')->table('info_cities')->where('state_id',$id)->get(); 
        return response()->json($cities);   
    }
}
