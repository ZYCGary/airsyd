<?php

use Illuminate\Database\Seeder;
use App\Models\Locale;

class LocalesTableSeeder extends Seeder
{
    public function run()
    {
        $locales = factory(Locale::class)->times(25)->make()->each(function ($locale, $index) {
            if ($index == 0) {
                $locale->code = 'zh-CN';
                $locale->language = '简体中文';
                $locale->speak = '中文 (普通话)';
                $locale->is_app_lang = true;
                $locale->is_admin_lang = true;
            }
            if ($index == 1) {
                $locale->code = 'en-AU';
                $locale->language = 'English (Australia)';
                $locale->speak = 'English';
                $locale->is_app_lang = true;
                $locale->is_admin_lang = true;
            }
        });

        Locale::insert($locales->toArray());
    }

}

