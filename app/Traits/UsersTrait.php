<?php


namespace App\Traits;


use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

trait UsersTrait
{
    /**
     * Display user profile page.
     *
     * @param User $user
     * @return Factory|View
     */
    public function show(User $user)
    {
        return view('web.users.show', compact('user'));
    }
}
