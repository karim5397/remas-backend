<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeederTable::class);
        $this->call(AboutSeederTable::class);
        $this->call(ContactSeederTable::class);
        $this->call(NewsSeederTable::class);
        $this->call(BannerSeederTable::class);
        $this->call(ProductTableSeeder::class);
        $this->call(CertificateTableSeeder::class);
        $this->call(FinanceSeederTable::class);
        $this->call(DecisionSeederTable::class);
        $this->call(DirectorSeederTable::class);
        $this->call(DisclosureSeederTable::class);
        $this->call(ShareSeederTable::class);
        $this->call(BoardStructureSeederTable::class);
        $this->call(AdvertisementSeederTable::class);
        $this->call(RemediesSeederTable::class);
        $this->call(FollowUpSeederTable::class);
        $this->call(GovernmentSeederTable::class);
        $this->call(SettingSeederTable::class);
    }
}
