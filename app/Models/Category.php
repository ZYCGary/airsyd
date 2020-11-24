<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name', 'description'];
    public $timestamps = false;

    /**
     * Get the properties under the category.
     *
     * @return HasMany
     */
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
