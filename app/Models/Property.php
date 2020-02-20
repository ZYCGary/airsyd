<?php

namespace App\Models;

class Property extends Model
{
    protected $guarded = ['id', 'user_id'];
    protected $fillable = ['accommodation', 'type', 'street', 'suburb', 'state', 'total_bedrooms', 'total_bathrooms', 'max_load', 'rooms', 'photos', 'status'];
    protected $casts = [
        'rooms' => 'array',
        'photos' => 'array',
    ];
}
