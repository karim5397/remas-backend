<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\News;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' => 'نتائج أعمال الربع الاول من عام 2022',
            'status' => 'active',
            'date' => Carbon::now()->format('Y-m-d'),
            'description' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها',
            'photo' => 'frontend/assets/images/news/news1.jpg',
            'page_title' => 'ريماس | احدث الاخبار',
        ]);
        News::create([
            'title' => 'نتائج أعمال الربع الثانى من عام 2022',
            'status' => 'active',
            'date' => Carbon::now()->format('Y-m-d'),
            'description' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها',
            'photo' => 'frontend/assets/images/news/news2.png',
            'page_title' => 'ريماس | احدث الاخبار',
        ]);
        News::create([
            'title' => 'نتائج أعمال الربع الثالث من عام 2022',
            'status' => 'active',
            'date' => Carbon::now()->format('Y-m-d'),
            'description' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها',
            'photo' => 'frontend/assets/images/news/news3.jpg',
            'page_title' => 'ريماس | احدث الاخبار',
        ]);
        News::create([
            'title' => 'نتائج أعمال الربع الرابع من عام 2022',
            'status' => 'active',
            'date' => Carbon::now()->format('Y-m-d'),
            'description' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها',
            'photo' => 'frontend/assets/images/news/news4.jpg',
            'page_title' => 'ريماس | احدث الاخبار',
        ]);
        News::create([
            'title' => 'نتائج أعمال الربع الاول من عام 2021',
            'status' => 'active',
            'date' => Carbon::now()->format('Y-m-d'),
            'description' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها',
            'photo' => 'frontend/assets/images/news/news1.jpg',
            'page_title' => 'ريماس | احدث الاخبار',
        ]);
        News::create([
            'title' => 'نتائج أعمال الربع الثانى من عام 2021',
            'status' => 'active',
            'date' => Carbon::now()->format('Y-m-d'),
            'description' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها',
            'photo' => 'frontend/assets/images/news/news2.png',
            'page_title' => 'ريماس | احدث الاخبار',
        ]);
    }
}
