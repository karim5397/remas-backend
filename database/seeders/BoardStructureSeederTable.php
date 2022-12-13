<?php

namespace Database\Seeders;

use App\Models\BoardStructure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BoardStructureSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BoardStructure::create([
         'name' => '  صلاح محمد فتح الله السعودى',
         'position' => 'تنفيذى',
         'company_name' => 'شركة أبناء محمد فتح الله السعودى',
         'type' => 'member',
        ]);
        BoardStructure::create([
            'name' => '  أحمد صلاح محمد فتح الله السعودى',
            'position' => 'تنفيذى',
            'company_name' => 'شركة أبناء محمد فتح الله السعودى',
            'type' => 'member',
            
        ]);
     
        BoardStructure::create([
            'name' =>  ' أيه صلاح محمد فتح الله السعودى',
            'position' => 'غير تنفيذى',
            'company_name' => 'شركة أبناء محمد فتح الله السعودى',
            'type' => 'member',
            
        ]);
        BoardStructure::create([
            'name' =>  ' محمد صلاح محمد فتح الله السعودى',
            'position' => 'غير تنفيذى',
            'company_name' => 'شركة أبناء محمد فتح الله السعودى',
            'type' => 'member',
            
        ]);
        BoardStructure::create([
            'name' => '  تركى زيد الفهد',
            'position' => 'غير تنفيذى',
            'company_name' => 'المجموعة الإستثمارية العقارية الكويتية',
            'type' => 'member',
            
        ]);
        BoardStructure::create([
            'name' =>  ' مصطفى ابراهيم محمد ابراهيم حجاب',
            'position' => 'غير تنفيذى',
            'company_name' => 'المجموعة الإستثمارية العقارية الكويتية',
            'type' => 'member',
            
        ]);
        BoardStructure::create([
            'name' =>  ' مها عادل مبارك العصفور',
            'position' => 'غير تنفيذى',
            'company_name' => 'المجموعة الإستثمارية العقارية الكويتية', 
            'type' => 'member',
            
        ]);
        BoardStructure::create([
            'name' =>  ' أنوار أحمد حموده الابراهيم',
            'position' => 'غير تنفيذى',
            'company_name' => 'المجموعة الإستثمارية العقارية الكويتية',
            'type' => 'member',

        ]);
        BoardStructure::create([
            'name' =>  'علاء عفيفى قنديل',
            'position' => 'مدير عام الشئون التجارية و الإدارية',
            'type' => 'director',

        ]);
        BoardStructure::create([
            'name' =>  'ياسر محمد على صالح السعودى',
            'position' => 'مدير عام الشئون المالية',
            'type' => 'director',

        ]);
        BoardStructure::create([
            'name' =>  'أبى بكر ياسين محمود الحفناوى',
            'position' => 'مدير علاقات المستثمرين',
            'type' => 'director',

        ]);
    }
}
