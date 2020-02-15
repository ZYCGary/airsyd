<?php


namespace App\Models\Traits;


use App\Models\Locale;

trait LocaleTrait
{
    /**
     * Get all locale record in locales database.
     *
     * @return array
     */
    public static function getAllLocales()
    {
        $allLocales = Locale::all();
        $result = [];
        foreach ($allLocales as $locale) {
            $result[$locale->code] = $locale;
        }
        return $result;
    }

    /**
 * Get all the locales that supported by the web site.
 *
 * @return array
 */
    public static function getAllAppLocales()
    {
        $result = [];
        foreach (self::getAllLocales() as $code => $locale) {
            if ($locale->is_app_lang) {
                $result[$locale->code] = [
                    'code' => $locale->code,
                    'language' => $locale->language,
                    'speak' => $locale->speak,
                ];
            }
        }
        return $result;
    }

    /**
     * Get all the locales that supported by the admin site.
     *
     * @return array
     */
    public static function getAllAdminLocales()
    {
        $result = [];
        foreach (self::getAllLocales() as $code => $locale) {
            if ($locale->is_admin_lang) {
                $result[$locale->code] = [
                    'code' => $locale->code,
                    'language' => $locale->language,
                    'speak' => $locale->speak,
                ];
            }
        }
        return $result;
    }
}
