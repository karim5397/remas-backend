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
            'head_phone' => '02 37617737',
            'head_email' => 'info@aaw.com',
            'head_address' => ' 37 Babel St. | P.O. Box 1534 | Dokki Giza, Greater Cairo 12311, EG',
            'head_openinig_time' => '09:00 am - 06:00 pm',
            'branch_phone' => '1-800-555-1234',
            'branch_email' => ' info@aaw.com',
            'branch_address' => '37 Babel St. | P.O. Box 1534 | Dokki Giza, Greater Cairo 12311, EG',
            'branch_opening_time' => '09:00 am - 06:00 pm',
        ]);
    }
}
