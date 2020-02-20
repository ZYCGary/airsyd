<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suburb extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['code', 'name', 'state'];
    protected $timestamps = false;
}
