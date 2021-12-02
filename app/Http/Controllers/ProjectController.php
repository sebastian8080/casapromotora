<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    
    public function index()
    {
        return view('admin.projects.index');
    }
 
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function viewProject(String $nombreProyecto){
        if($nombreProyecto == "Adra"){
            $name_folder = "adra";
            $num_imagenes = 15;
            $extension = "jpg";
            return view('pages.project', compact('nombreProyecto', 'name_folder', 'num_imagenes', 'extension'));
        } else if($nombreProyecto == "Futura Narancay"){
            $name_folder = "futuranarancay";
            $num_imagenes = 7;
            $extension = "jpeg";
            return view('pages.project', compact('nombreProyecto', 'name_folder', 'num_imagenes', 'extension'));
        } else if($nombreProyecto = "Toscana"){
            $name_folder = "toscana";
            $num_imagenes = 19;
            $extension = "jpg";
            return view('pages.project', compact('nombreProyecto', 'name_folder', 'num_imagenes', 'extension'));
        }
    }
}
