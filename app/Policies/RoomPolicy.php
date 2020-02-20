<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Room;

class RoomPolicy extends Policy
{
    public function update(User $user, Room $room)
    {
        // return $room->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Room $room)
    {
        return true;
    }
}
