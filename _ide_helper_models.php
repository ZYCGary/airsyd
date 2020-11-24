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
 * App\Models\Category
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Property[] $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model recent()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category whereName($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Suburb
 *
 * @property int $id
 * @property int $code
 * @property string $name
 * @property string $state
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Property[] $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Suburb newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Suburb newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Suburb query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model recent()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Suburb whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Suburb whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Suburb whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Suburb whereState($value)
 */
	class Suburb extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Room
 *
 * @property int $id
 * @property int $property_id
 * @property string $name
 * @property int $rent
 * @property int $bath
 * @property int $bed_size
 * @property int $bond
 * @property int $bills
 * @property-read \App\Models\Property $property
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model recent()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room whereBath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room whereBedSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room whereBills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room whereBond($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room wherePropertyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Room whereRent($value)
 */
	class Room extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $introduction
 * @property string|null $avatar
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $prefer_lang
 * @property array|null $can_speak
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Property[] $properties
 * @property-read int|null $properties_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCanSpeak($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereIntroduction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePreferLang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
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
 * App\Models\Property
 *
 * @property int $id
 * @property int $user_id
 * @property int $category_id The accommodation type offered
 * @property int $type The type of property
 * @property string $street
 * @property int $suburb_id
 * @property int $total_bedrooms
 * @property int $total_bathrooms
 * @property int $max_load Max number of tenants
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Room[] $rooms
 * @property-read int|null $rooms_count
 * @property-read \App\Models\Suburb $suburb
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Model recent()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereMaxLoad($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereSuburbId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereTotalBathrooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereTotalBedrooms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Property whereUserId($value)
 */
	class Property extends \Eloquent {}
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

