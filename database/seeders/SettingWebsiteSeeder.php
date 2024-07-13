<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Settings::create([
            'title' => 'مركز ياس - Yas Center LLS',
            'keywords'=> 'مركز ياس , خدمات , إدارية , الجهات الحكومية ,  تقديم خدمات , الحكومية الاتحادية , مواطني الدولة , الموارد , الهيئة , دائرة , التنمية Yas Center LL',
            'description'=> 'مركز ياس Yas Center LLS شامل ومتخصص فى تقديم الخدمات الإدارية وإلى جانب مجموعة من الخدمات الهامة لعدد من الجهات الحكومية الاتحادية والمحلية',
            'email_website'=> 'info@yastasheel.ae',
            'address_center'=> 'أبوظبي – مصفح – م 25 خلف دانوب – مجمع MUSSFAH PARK CU',
            'time_work'=> 'من 8:00 صباحاً الى 8:00 مساءً',
            'mobile_website'=> '025555360',
            'facebook_link'=> '#',
            'twitter_link'=> '#',
            'youtube_link'=> '#',
            'instagram_link'=> '#',
            'sub_title'=> 'مركز ياس',
            'title_header'=> 'أكبر مركز في الدولة على مساحة 1600 متر.',
        ]);
    }
}
