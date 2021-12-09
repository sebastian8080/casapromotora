<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;

class PartnersController extends Controller
{

    public function index(){
        $products = Product::all();
        $categorias = Categoria::all();
        return view('pages.products', compact('products', 'categorias'));
    }

    public function indexDolmen(){
        $categorias = Categoria::all();
        return view('pages.dolmen', compact('categorias'));
    }

    public function showCategory(String $nombre_categoria){
        $categorias = Categoria::all();
        $products = Product::where('codigo_categoria', $nombre_categoria);
        return view('pages.products', compact('categorias', 'products'));
    }
   
}
