<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Property;

class PropertyPolicy extends Policy
{
    public function update(User $user, Property $property)
    {
        // return $property->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Property $property)
    {
        return true;
    }
}
