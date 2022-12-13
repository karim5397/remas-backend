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
            'founding_date' => '10/3/1981',
            'followed_law' => 'رقم 8 لسنة 1997 - رقم 2 لسنة 2017 حالياً',
            'purpose' => 'إنتاج و الإتجار فى الأدوات الصحية و البلاط و السبراميك و الصناعات المتصلة و المكملة لها',
            'company_branches' => '14ش النور-الدقى -جيزة 
            قطعة240 حى الملتقى العربى -النزهة-القاهرة',
            'stock_market_date' => '7/4/1992',
            'version_number' => '36',
            'par_value' => '0.25 جينه مصرى',
            'number_shares' => '71875000 سهم',
            'issued_capital' => '179687500 جينة مصرى',
            'authorized_capital' => '500 مليون جينه مصرى',
            'financial_year' => 'بدأ من: أول يناير ،تنتهي في: 31 ديسمبر من كل عام',
            'external_auditor' => 'أحمد يحى أحمد نيازى',
            'vision_mission' => 'قم بتحسين نمط حياة عملائنا وتزويدهم بتجربة معيشية أفضل داخل منازلهم من خلال تزويدهم بمنتجات عالية الجودة بتصاميم إبداعية وجذابة من الناحية الجمالية تناسب كل الأذواق التي يتم تقديمها بطريقة أخلاقية وصديقة للبيئة. قدم لوكلائنا سعر منتج تنافسي مع تصميمات فريدة تميزنا عن المنافسة.',
        ]);
    }
}
