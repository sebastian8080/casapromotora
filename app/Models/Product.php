<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $fillable = [
        'codigo', 'codigo_categoria', 'descripcion', 'pvp',
        'unidad_tipo', 'unidad_x_cantidad', 'm2_x_cantidad',
        'kg_x_unidad', 'unidad_x_pallet', 'pvp_m2', 'url_image',
        'data_sheet', 'created_at', 'updated_at'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'codigo_categoria','codigo_categoria');
    }
}
