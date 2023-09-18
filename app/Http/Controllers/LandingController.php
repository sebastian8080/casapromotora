<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project\Category;
use App\Models\Project\Property;

class LandingController extends Controller
{
    public function index($type){
        // $projects = Category::where('type', 'LIKE', '%departamentos%')->get();
        //$property = Property::select('price')->where('category_id', $project->category_id)->min('price');

        // return view('landings.project', compact('project', 'property'));
        if($type == "departamentos" || $type == "casas"){
            return view('landings.project', compact('type'));
        } else {
            return redirect()->route('pages.projects');
        }
    }

    public function sendlead(Request $request){
        
        $to = "info@casacredito.com"; //info@casacredito.com
        $subject = "Lead Promotora - " . strip_tags($request->name);
        $message = "<br><strong>Información del Lead</strong>
            <br><b>Nombre:</b> " . strip_tags($request->name) ." ". strip_tags($request->lastname) ."
            <br><b>Teléfono:</b> " . strip_tags($request->phone) ."
            <br><b>Email:</b> " . strip_tags($request->email) ."
            <br><b>Mensaje:</b> " . strip_tags($request->message) ."
            <br><b>Interes:</b> " . strip_tags($request->interest) . "
            ";

        $header = "From: <info@casapromotora.com>" . "\r\n" .
                "MIME-Version: 1.0" . "\r\n" .
                "Content-Type:text/html;charset=UTF-8" . "\r\n";

        $sended = mail($to, $subject, $message, $header);
        mail('sebas31051999@gmail.com', $subject, $message, $header);

        return redirect()->back()->with('status', $sended);
    }
}
