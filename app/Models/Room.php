<?php

namespace App\Models;


class Room extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['property_id', 'name', 'rent', 'bath', 'bed_size', 'bond', 'bills'];
    public $timestamps = false;
}
