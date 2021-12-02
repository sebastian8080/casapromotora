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
        switch ($nombreProyecto) {
            case 'Adra':
                $data['name_folder'] = 'adra';
                $data['num_imagenes'] = 15;
                $data['extension'] = 'jpg';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['precio'] = '125.000';
                $data['num_habitaciones'] = 5;
                $data['num_baños'] = 2;
                $data['metros_cuadrados'] = 60;
                $data['parqueadero'] = 1;
                break;
            
            case 'Futura Narancay':
                $data['name_folder'] = 'futuranarancay';
                $data['num_imagenes'] = 7;
                $data['extension'] = 'jpeg';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['precio'] = '130.000';
                $data['num_habitaciones'] = 6;
                $data['num_baños'] = 3;
                $data['metros_cuadrados'] = 80;
                $data['parqueadero'] = 1;
                break;

            case 'Toscana':
                $data['name_folder'] = 'toscana';
                $data['num_imagenes'] = 19;
                $data['extension'] = 'jpg';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['precio'] = '100.000';
                $data['num_habitaciones'] = 4;
                $data['num_baños'] = 1;
                $data['metros_cuadrados'] = 50;
                $data['parqueadero'] = 1;
                break;
        }
        return view('pages.project', $data);
    }
}
