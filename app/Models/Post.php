<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "post";
    
    protected $fillable = [
        'id',
        'titulo',
        'tiempo_lectura',
        'url_img_principal',
        'url_img_secundaria',
        'url_img_terciaria',
        'contenido',
        // 'slug',
        'metadescripcion',
        'keywords',
        'created_at',
        'updated_at'
    ];

}
