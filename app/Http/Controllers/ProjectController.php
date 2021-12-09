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

    // $data['precio'] = '245.000';
    //                 $data['alicuota'] = '237.00';
    //                 $data['contains_area'] = true;
    //                 $data['area_interior'] = "143.42 M2";
    //                 $data['area_verde'] = "51.74 M2";
    //                 $data['area_parqueo'] = "26.50 M2";
    //                 $data['area_bodega'] = "4.51 M2";
    //                 $data['area_total'] = "226.17 M2";
    //                 $data['num_habitaciones'] = "1-3";
    //                 $data['num_baños'] = "3-4";
    //                 $data['metros_cuadrados'] = "97 - 226";
    //                 $data['parqueadero'] = "1-2";

    public function viewProject(String $nombreProyecto){
        switch ($nombreProyecto) {
            case 'Adra':
                $data['name_folder'] = 'adra';
                $data['num_imagenes'] = 15;
                $data['extension'] = 'jpg';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['departamentos'] = [
                    [
                        'num_departamento' => 1,
                        'precio' => '245.000',
                        'alicuota' => '237.00',
                        'contains_area' => true,
                        'area_interior' => 143.42,
                        'area_verde' => 51.74,
                        'area_parqueo' => 26.50,
                        'area_bodega' => 4.51,
                        'area_total' => 226.17,
                        'num_habitaciones' => 3,
                        'num_baños' => 4,
                        'parqueadero' => 2
                    ],
                    [
                        'num_departamento' => 2,
                        'precio' => '99,000',
                        'alicuota' => '116.00',
                        'contains_area' => true,
                        'area_interior' => 70.13,
                        'area_verde' => 9.59,
                        'area_parqueo' => 13.25,
                        'area_bodega' => 4.48,
                        'area_total' => 97.45,
                        'num_habitaciones' => 1,
                        'num_baños' => 3,
                        'parqueadero' => 1
                    ]
                ];
                break;
            
            case 'Futura Narancay':
                $data['name_folder'] = 'futuranarancay';
                $data['num_imagenes'] = 7;
                $data['extension'] = 'jpeg';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['departamentos'] = [
                    [
                        'num_departamento' => 1,
                        'precio' => '245.000',
                        'alicuota' => '237.00',
                        'contains_area' => true,
                        'area_interior' => 54.77,
                        'area_verde' => 43.51,
                        'area_parqueo' => 12.5,
                        'area_bodega' => 4.31,
                        'area_total' => 115.09,
                        'num_habitaciones' => 3,
                        'num_baños' => 4,
                        'parqueadero' => 2
                    ],
                    [
                        'num_departamento' => 2,
                        'precio' => '99,000',
                        'alicuota' => '116.00',
                        'contains_area' => true,
                        'area_interior' => 70.13,
                        'area_verde' => 9.59,
                        'area_parqueo' => 13.25,
                        'area_bodega' => 4.48,
                        'area_total' => 97.45,
                        'num_habitaciones' => 1,
                        'num_baños' => 3,
                        'parqueadero' => 1
                    ]
                ];
                break;

            case 'Toscana':
                $data['name_folder'] = 'toscana';
                $data['num_imagenes'] = 19;
                $data['extension'] = 'jpg';
                $data['nombreProyecto'] = $nombreProyecto;
                $data['departamentos'] = [
                    [
                        'num_departamento' => 1,
                        'precio' => '245.000',
                        'alicuota' => '237.00',
                        'contains_area' => true,
                        'area_interior' => 54.77,
                        'area_verde' => 43.51,
                        'area_parqueo' => 12.5,
                        'area_bodega' => 4.31,
                        'area_total' => 115.09,
                        'num_habitaciones' => 3,
                        'num_baños' => 4,
                        'parqueadero' => 2
                    ],
                    [
                        'num_departamento' => 2,
                        'precio' => '99,000',
                        'alicuota' => '116.00',
                        'contains_area' => true,
                        'area_interior' => 70.13,
                        'area_verde' => 9.59,
                        'area_parqueo' => 13.25,
                        'area_bodega' => 4.48,
                        'area_total' => 97.45,
                        'num_habitaciones' => 1,
                        'num_baños' => 3,
                        'parqueadero' => 1
                    ]
                ];
                break;
        }
        return view('pages.project', $data);
    }

    public function changeDepartment($nombreProyecto, $num_departamento){
        return view('pages.project', $num_departamento);
    }
}
