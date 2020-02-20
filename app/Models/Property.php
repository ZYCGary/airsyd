<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['user_id', 'category_id', 'type', 'street', 'suburb_id', 'total_bedrooms', 'total_bathrooms', 'max_load'];

    /**
     * Get the user that posts the property.
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the suburb of the property.
     *
     * @return BelongsTo
     */
    public function suburb()
    {
        return $this->belongsTo(Suburb::class);
    }

    /**
     * Get the category of the property.
     *
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    /**
     * Get the rooms that the property owns.
     *
     * @return HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
