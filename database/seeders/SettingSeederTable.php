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
            'page_title' => 'Home | AAW Consulting Engineers',
            'meta_description' => 'AAW Consulting Engineers is a leading privately owned multidisciplinary consulting engineering group headquartered in Cairo, Egypt, with a Business  lines in complex infrastructure projects',
            'meta_auth' => 'AAW',
            'meta_title' => 'AAW Consulting Engineers',
            'logo' => 'frontend/assets/images/logo.png',
            'favicon' => 'frontend/assets/images/favicon.png',
            'facebook_url' => 'https://www.facebook.com/',
            'linkedin_url' => 'https://www.linkedin.com/',
            'news_page_title' => 'AAW | All News',
            'news_meta_description' => 'AAW Consulting Engineers News',
            'news_meta_auth' => 'AAW',
            'news_meta_title' => 'AAW Consulting Engineers News',
            'projects_page_title' => 'AAW | All Projects',
            'projects_meta_description' => 'AAW Consulting Engineers Projects',
            'projects_meta_auth' => 'AAW',
            'projects_meta_title' => 'AAW Consulting Engineers Projects',
            'videos_page_title' => 'AAW | All Videos',
            'videos_meta_description' => 'AAW Consulting Engineers Videos',
            'videos_meta_auth' => 'AAW',
            'videos_meta_title' => 'AAW Consulting Engineers Videos',
        ]);
    }
}
