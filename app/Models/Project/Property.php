<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = "properties";

    protected $primaryKey = "property_id";

    protected $fillable = [
        'property_id', 'category_id', 'property_code', 'title', 'price', 'total_area', 'indoor_area', 'bedrooms', 'bathrooms', 'garage', 'images', 'slug', 'status', 'created_at', 'updated_at'
    ];
}
