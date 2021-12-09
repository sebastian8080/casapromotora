<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;

class PartnersController extends Controller
{

    public function index(){
        $products = Product::all();
        return view('pages.products', compact('products'));
    }

    public function indexDolmen(){
        $categorias = Categoria::all();
        return view('pages.dolmen', compact('categorias'));
    }

    public function showCategory(Categoria $categoria){
        $category = Categoria::find($categoria);
        return view('pages.products', compact('category'));
    }
   
}
