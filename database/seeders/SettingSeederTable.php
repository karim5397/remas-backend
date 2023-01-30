<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'email' => 'info[at]ceramicaremas.com', 
            'phone' => '(+02) 226 965 1', 
            'footer_desc' => 'قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة من الناحية الجمالية تناسب كل الأذواق التي يتم تقديمها بطريقة أخلاقية وصديقة للبيئة. قدم لوكلائنا سعر منتج تنافسي مع تصميمات فريدة تميزنا عن المنافسة.', 
            'page_title' => 'ريماس | الرئيسيه',
            'meta_description' => 'قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة',
            'meta_auth' => 'ريماس',
            'meta_title' => 'شركه سيراميكا ريماس تواصل معانا',
            'logo' => 'frontend/assets/images/logo.png',
            'favicon' => 'frontend/assets/images/favicon.ico',
            'facebook_url' => 'https://www.facebook.com/',
            'instagram_url' => 'https://www.instagram.com/',
            'news_page_title' => 'ريماس | احدث الاخبار',
            'news_meta_description' => 'قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة',
            'news_meta_auth' => 'ريماس',
            'news_meta_title' => 'شركه سيراميكا ريماس احدث الاخبار',
            'contact_page_title' => 'ريماس | اتصل بنا',
            'contact_meta_description' => 'قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة',
            'contact_meta_auth' => 'ريماس',
            'contact_meta_title' => 'شركه سيراميكا ريماس تواصل معانا',
            'investment_page_title' => 'ريماس | علاقات المستثمرين',
            'investment_meta_description' => 'قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة',
            'investment_meta_auth' => 'ريماس',
            'investment_meta_title' => 'شركه سيراميكا ريماس  علاقات المستثمرين',
        
        ]);
    }
}
