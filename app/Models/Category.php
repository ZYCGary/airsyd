<?php

namespace App\Models;


class Category extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name', 'description'];
    public $timestamps = false;
}
