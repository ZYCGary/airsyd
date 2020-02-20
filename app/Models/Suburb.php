<?php

namespace App\Models;


class Suburb extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['code', 'name', 'state'];
    public $timestamps = false;

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
