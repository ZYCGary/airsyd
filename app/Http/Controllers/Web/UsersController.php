<?php

namespace App\Http\Controllers\Web;

use App\Handlers\ImageUploadHandler;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{

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

    public function update(UserRequest $userRequest, ImageUploadHandler $uploader,  User $user)
    {
        $this->authorize('update', $user);
        $request = $userRequest->all();

        if ($userRequest->avatar) {
            $result = $uploader->save($userRequest->avatar, 'avatars', $user->id, 'web', 416);
            if ($result) {
                $request['avatar'] = $result['path'];
            }
        }
        $request['can_speak'] = ($request['speaks']);
        $user->update($request);
        toast(trans('alerts.success.update', ['info' => trans('users.profile.information')]), 'success');
        return redirect()->route('web.users.show', $user->id);
    }
}
