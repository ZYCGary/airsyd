<?php

use Illuminate\Database\Seeder;
use App\Models\Locale;

class LocalesTableSeeder extends Seeder
{
    public function run()
    {
        $locales = factory(Locale::class)
            ->times(10)
            ->make()
            ->each(function ($locale, $index) {
                if ($index == 0) {
                    $locale->code = 'zh-cn';
                    $locale->language = '简体中文';
                    $locale->speak = '中文 (普通话)';
                    $locale->is_app_lang = true;
                    $locale->is_admin_lang = true;
                }
                if ($index == 1) {
                    $locale->code = 'en-au';
                    $locale->language = 'English (AU)';
                    $locale->speak = 'English';
                    $locale->is_app_lang = true;
                    $locale->is_admin_lang = true;
                }
                if ($index == 2) {
                    $locale->code = 'zh-hk';
                    $locale->language = '繁体中文';
                    $locale->speak = '中文 (粤语)';
                    $locale->is_app_lang = true;
                    $locale->is_admin_lang = false;
                }
            });

        Locale::insert($locales->toArray());
    }

}

