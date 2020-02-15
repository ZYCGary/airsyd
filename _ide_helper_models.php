<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $introduction
 * @property string|null $avatar
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static Builder|User newModelQuery()
 * @method static Builder|User newQuery()
 * @method static Builder|User query()
 * @method static Builder|User whereCreatedAt($value)
 * @method static Builder|User whereEmail($value)
 * @method static Builder|User whereEmailVerifiedAt($value)
 * @method static Builder|User whereId($value)
 * @method static Builder|User whereName($value)
 * @method static Builder|User wherePassword($value)
 * @method static Builder|User whereRememberToken($value)
 * @method static Builder|User whereUpdatedAt($value)
 * @mixin Eloquent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIntroduction($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Model
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model recent()
 */
	class Model extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Locale
 *
 * @property int $id
 * @property string $code
 * @property string $language
 * @property string $speak
 * @property int $is_app_lang
 * @property int $is_admin_lang
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model recent()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereIsAdminLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereIsAppLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereSpeak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Locale whereUpdatedAt($value)
 */
	class Locale extends \Eloquent {}
}

