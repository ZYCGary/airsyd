<?php

namespace App\Models;

class Locale extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['code', 'language', 'speak', 'is_app_lang', 'is_admin_lang'];
}
