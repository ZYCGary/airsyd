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
                $result[$code] = [
                    'code' => $code,
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
                $result[$code] = [
                    'code' => $code,
                    'language' => $locale->language,
                    'speak' => $locale->speak,
                ];
            }
        }
        return $result;
    }

    /**
     * Get all languages speak.
     *
     * @return array
     */
    public static function getAllSpeaks()
    {
        $result = [];
        foreach (self::getAllLocales() as $code => $locale) {
            if (!in_array($locale->speak, $result)) {
                $result[$code] = $locale->speak;
            }
        }
        return $result;
    }
}
