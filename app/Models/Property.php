<?php

namespace App\Models;

class Property extends Model
{
    protected $fillable = ['user_id', 'category_id', 'type_id', 'street', 'suburb', 'total_bedrooms', 'total_bathrooms', 'max_load'];
}
