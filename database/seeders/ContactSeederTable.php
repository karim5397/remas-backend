<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactUs::create([
            'title' => 'فرع الدقى',
            'phone' => '0123456789',
            'email' => 'info[at]ceramicaremas.com',
            'address' => ' قطعة 240 حي الملتقى العربي شيراتون النزهه – القاهره',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.698994166238!2d31.204208799999996!3d30.045492299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841321682eddb%3A0xe1ad8f549d8891ce!2sDr+Michel+Bakhoum%2C+Ad+Doqi%2C+Giza!5e0!3m2!1sen!2seg!4v1409417509777',
            'status' => 'active',

        ]);
        ContactUs::create([
            'title' => 'فرع المعادى',
            'phone' => '0123456789',
            'email' => 'info[at]ceramicaremas.com',
            'address' => ' قطعة 240 حي الملتقى العربي شيراتون النزهه – القاهره',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.698994166238!2d31.204208799999996!3d30.045492299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841321682eddb%3A0xe1ad8f549d8891ce!2sDr+Michel+Bakhoum%2C+Ad+Doqi%2C+Giza!5e0!3m2!1sen!2seg!4v1409417509777',
            'status' => 'active',

        ]);
        ContactUs::create([
            'title' => 'فرع مدينه نصر',
            'phone' => '0123456789',
            'email' => 'info[at]ceramicaremas.com',
            'address' => ' قطعة 240 حي الملتقى العربي شيراتون النزهه – القاهره',
            'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.698994166238!2d31.204208799999996!3d30.045492299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145841321682eddb%3A0xe1ad8f549d8891ce!2sDr+Michel+Bakhoum%2C+Ad+Doqi%2C+Giza!5e0!3m2!1sen!2seg!4v1409417509777',
            'status' => 'active',

        ]);
    }
}
