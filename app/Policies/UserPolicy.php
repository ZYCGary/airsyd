<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy extends Policy
{
    public function edit(User $currentUser, User $user)
    {
        return $currentUser->isSameUser($user);
    }

    public function update(User $currentUser, User $user)
    {
        return $currentUser->isSameUser($user);
    }
}
