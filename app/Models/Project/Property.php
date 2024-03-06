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
        'property_id', 'category_id', 'property_code', 'title', 'price', 
        'state', 'city', 'address', 'street', 'type', //estas variables son para usarlas con el buscador
        'total_area', 'indoor_area', 'bedrooms', 'bathrooms', 'garage', 'num_piso', 'heading_details', 'images', 'slug', 'status', 'created_at', 'updated_at'
    ];
}
