<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = "category_id";

    protected $table = "project_category";

    protected $fillable = [
        'category_id', 'project_code', 'type', 'project_name', 'state', 'city', 'address', 'description', 'slug', 'images', 'benefits', 'services', 'communal_areas',
        'img_header', 'img_top', 'txt_description', 'txt_inside_img', 'slogan', 'url_maps',
        'status',
        'created_at', 'updated_at'
    ];
}
