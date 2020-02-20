<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;

class Suburb extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['code', 'name', 'state'];
    public $timestamps = false;

    /**
     * Get the properties that located in the suburb.
     *
     * @return HasMany
     */
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
