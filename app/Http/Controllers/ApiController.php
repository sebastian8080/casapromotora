<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project\Category;

class ApiController extends Controller
{
    public function getprojects(){
        $projects = Category::select('project_code', 'type', 'project_name', 'state', 'city', 'address', 'slug', 'images', 'status')->where('status', 1)->get();
        return $projects;
    }
}
