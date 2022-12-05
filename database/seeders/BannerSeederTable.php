<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'title' => 'تشكيله رائعه من المنتجات',
            'status' => 'active',
            'description' => 'لدينا افضل انواع السيراميك و البورسلين التى تنافس  فى الاسواق العالميه',
            'photo' => 'frontend/assets/images/bg/banner1.jpg',
        ]);
        Banner::create([
            'title' => 'تشكيله رائعه من المنتجات',
            'status' => 'active',
            'description' => 'لدينا افضل انواع السيراميك و البورسلين التى تنافس  فى الاسواق العالميه',
            'photo' => 'frontend/assets/images/bg/banner2.jpg',
        ]);
        Banner::create([
            'title' => 'تشكيله رائعه من المنتجات',
            'status' => 'active',
            'description' => 'لدينا افضل انواع السيراميك و البورسلين التى تنافس  فى الاسواق العالميه',
            'photo' => 'frontend/assets/images/bg/banner7.jpg',
        ]);
    }
}
