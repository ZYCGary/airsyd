<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Room extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['property_id', 'name', 'rent', 'bath', 'bed_size', 'bond', 'bills'];
    public $timestamps = false;

    /**
     * Get the property of the room.
     *
     * @return BelongsTo
     */
    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
