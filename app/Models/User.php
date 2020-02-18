<?php

namespace App\Models;

use App\Notifications\Auth\UserEmailVerificationNotification;
use App\Notifications\Auth\UserResetPasswordNotification;
use Illuminate\Auth\MustVerifyEmail as MustVerifyEmailTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use Notifiable, MustVerifyEmailTrait;

    /**
     * The attributes that should not be modified.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'introduction', 'avatar', 'prefer_lang', 'can_speak',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'can_speak' => 'array',
    ];

    /**
     * Route to get single model URI link.
     *
     * @param array $params
     * @return string
     */
    public function link($params = [])
    {
        $params = array_merge([$this->id], $params);
        return route('users.show', $params);
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new UserResetPasswordNotification($token));
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new UserEmailVerificationNotification());
    }

    /**
     * Check whether the current user is same as the specific user.
     *
     * @param User $user
     * @return bool
     */
    public function isSameUser(User $user)
    {
        return $this->id === $user->id;
    }
}
