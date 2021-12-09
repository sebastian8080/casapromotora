<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categoria";

    protected $fillable = [
        'codigo_categoria', 'nombre_categoria', 'url_image'
    ];

    public function products(){
        return $this->hasMany(Product::class,'codigo_categoria','codigo_categoria');
    }
}
