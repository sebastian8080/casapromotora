<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Product;
use Illuminate\Http\Request;

class PartnersController extends Controller
{

    public function getAllCategories(){
        return Categoria::all();
    }

    // public function getCategorieByCod(String $codigo_categoria){
    //     return Categoria::where('codigo_categoria', $codigo_categoria)->get();
    // }

    public function index(){
        $products = Product::select()
            ->orderBy('codigo_categoria')
            ->get();
        $categorias = Categoria::all();
        return view('pages.products', compact('products', 'categorias'));
    }

    public function indexDolmen(){
        $categorias = $this->getAllCategories();
        return view('pages.dolmen', compact('categorias'));
    }

    public function showCategory(String $codigo_categoria){
        $categorias = $this->getAllCategories();
        $products = Product::where('codigo_categoria', $codigo_categoria)->get();
        return view('pages.products', compact('categorias', 'products'));
    }
   
}
