<?php

namespace App\Models\Project;
use App\Models\Project\Property;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = "category_id";

    protected $table = "project_category";

    protected $fillable = [
        'category_id', 'project_code', 'type', 'project_name', 'state', 'city', 'address', 'street', 'description', 'slug', 'images', 'benefits', 'services', 'communal_areas',
        'img_header', 'img_top', 'txt_description', 'txt_inside_img_first', 'txt_inside_img_second', 'slogan_first', 'slogan_second', 'url_maps',
        'status',
        'entrance', 'dues', 'bank_credit',
        'created_at', 'updated_at',
        'cropped_image',
        'abbr'
    ];

    public function properties(){
        return $this->hasMany(Property::class, 'category_id');
    }
}
