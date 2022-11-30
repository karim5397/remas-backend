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
            'title' => 'Industrial Project Solutions',
            'typed_word' => 'We are Creating new World for You.", "We are Creating new World for You.',
            'status' => 'active',
            'description' => 'Innovation Starts With Big  Dream',
            'photo' => 'backend/assets/images/banners/banner1.jpg',
        ]);
        Banner::create([
            'title' => 'Industrial Project Solutions',
            'typed_word' => 'We are Creating new World for You.", "We are Creating new World for You.',
            'status' => 'active',
            'description' => 'Innovation Starts With Big  Dream',
            'photo' => 'backend/assets/images/banners/banner2.jpg',
        ]);
        Banner::create([
            'title' => 'Industrial Project Solutions',
            'typed_word' => 'We are Creating new World for You.", "We are Creating new World for You.',
            'status' => 'active',
            'description' => 'Innovation Starts With Big  Dream',
            'photo' => 'backend/assets/images/banners/banner3.jpg',
        ]);
    }
}
