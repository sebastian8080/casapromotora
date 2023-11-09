<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project\Category;
use App\Models\Project\Property;

class ApiController extends Controller
{
    public function getprojects(){
        
        $projects = Category::select('category_id', 'project_code', 'type', 'project_name', 'state', 'city', 'address', 'slug', 'images', 'status')->where('status', 1)->get();
        
        return $projects;
    }

    public function getprojectbyid($id){

        $project = Category::where('category_id', $id)->first();

        return $project;
    }

    public function getproperties(){

        $properties = Property::all();

        return $properties;

    }
}
