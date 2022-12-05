<?php

namespace Database\Seeders;

use App\Models\DetailsShare;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShareSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailsShare::create([
            'instrument_type' => 'أسهم أسمية',
            'par_value' => '10 جنيه مصري (عشرة جنيهات مصرية)',
            'issuances_details' => 'إصدار أول بقيمة 600 مليون جنيه مصري موزعة على 60 مليون سهم قيمة السهم
                                      الاسمية 10 جنيه مصري',
            'number_shares' => '1،632،072،354 سهم (فقط مليار وستمائة واثنان وثلاثون مليون واثنان وسبعون ألف
                                 وثلاثمائة وأربعة وخمسون سهم)',
            'financial_year' => 'تبدأ من: أول يناير ،تنتهي في: 31 ديسمبر من كل عام',
        ]);
    }
}
