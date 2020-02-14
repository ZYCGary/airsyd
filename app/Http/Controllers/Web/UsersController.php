<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\UsersTrait;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    use UsersTrait;

    public function __construct()
    {
        $this->middleware('auth', ['expect' => 'show']);
    }

    public function show(User $user)
    {
        return view('web.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('edit', $user);
        return view('web.users.edit', compact('user'));
    }
}
