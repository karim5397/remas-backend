<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AboutUs::create([
            'title' => 'We +60 Years Of Experience With A Big Fame Glorious Our And Company',
            'description' => 'AAW, is an independent Consulting Engineering firm established in 1957 in Cairo, Egypt, to serve the national developments in Egypt, Middle East and African countries by providing Professional Engineering Consulting Services for; Urban & Regional Planning, Integrated Infrastructure, Housing, Water Supplies & Sewerage, Roads, Highways, Bridges and Airports, Power Supply, Industrial Facilities, Irrigation & Drainage, Land reclamation. AAW work force has grown to about 1000 employees spread over 8 Regional Branches in the Gulf Region, Middle East, and Africa. They have always aspired to achieve project objectives by the selection of the most highly qualified professionals with practical experience combined with highest academic qualification.',
            'vision_desc' => 'AAW, is an independent Consulting Engineering firm established in 1957 in Cairo, Egypt, to serve the national developments in Egypt, Middle East and African countries by providing Professional Engineering Consulting Services for; Urban',
            'mission_desc' => 'AAW, is an independent Consulting Engineering firm established in 1957 in Cairo, Egypt, to serve the national developments in Egypt, Middle East and African countries by providing Professional Engineering Consulting Services for; Urban',
            'value_desc' => 'AAW, is an independent Consulting Engineering firm established in 1957 in Cairo, Egypt, to serve the national developments in Egypt, Middle East and African countries by providing Professional Engineering Consulting Services for; Urban',
            'photo' => 'backend/assets/images/about/about-1.png,backend/assets/images/about/about-2.png',
        ]);
    }
}
