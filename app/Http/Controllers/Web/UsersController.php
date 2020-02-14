<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Validator;
use Redirect;

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

    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update', $user);
        // Validate request.
        $maxIntro = '80';
        $rules = [
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/',
            'introduction' => 'max:' . $maxIntro,
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            alert(trans('errors.invalid_input_title'), trans('errors.invalid_input_msg'), 'error');
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        // Update user information with valid request.
        $user->update($request->all());
        toast(trans('alerts.success.update', ['info' => trans('users.profile.information')]), 'success');
        return redirect()->route('web.users.show', $user->id);
    }
}
