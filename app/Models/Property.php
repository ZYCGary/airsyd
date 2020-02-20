<?php

namespace App\Models;

class Property extends Model
{
    protected $fillable = ['user_id', 'category_id', 'type', 'street', 'suburb_id', 'total_bedrooms', 'total_bathrooms', 'max_load'];
}
