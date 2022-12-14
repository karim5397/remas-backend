<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'remas',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789'),
            'photo' => 'frontend/assets/images/users/user.jpg',
            'status' => 'active',
        ]);

    }
}
