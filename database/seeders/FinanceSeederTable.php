<?php

namespace Database\Seeders;

use App\Models\Finance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinanceSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Finance::create([
            'title' => ' تقارير الربع الاول لسنه 2022',
            'year' => '2022',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثانى لسنه 2022',
            'year' => '2022',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثالث لسنه 2022',
            'year' => '2022',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الرابع لسنه 2022',
            'year' => '2022',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => ' تقارير الربع الاول لسنه 2021',
            'year' => '2021',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثانى لسنه 2021',
            'year' => '2021',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثالث لسنه 2021',
            'year' => '2021',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الرابع لسنه 2021',
            'year' => '2021',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => ' تقارير الربع الاول لسنه 2020',
            'year' => '2020',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثانى لسنه 2020',
            'year' => '2020',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثالث لسنه 2020',
            'year' => '2020',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الرابع لسنه 2020',
            'year' => '2020',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => ' تقارير الربع الاول لسنه 2019',
            'year' => '2019',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثانى لسنه 2019',
            'year' => '2019',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الثالث لسنه 2019',
            'year' => '2019',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        Finance::create([
            'title' => 'تقارير الربع الرابع لسنه 2019',
            'year' => '2019',
            'file' => 'frontend/assets/media/files/dummy.pdf',
        ]);
        
    }
}
