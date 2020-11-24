<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Locale;

class LocalePolicy extends Policy
{
    public function update(User $user, Locale $locale)
    {
        // return $locale->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Locale $locale)
    {
        return true;
    }
}
