<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'title'=>'منتج سيراميك 1',
            'photo'=>'frontend/assets/images/products/product1.jpg',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 2',
            'photo'=>'frontend/assets/images/products/product2.jpg',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 3',
            'photo'=>'frontend/assets/images/products/product3.png',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 4',
            'photo'=>'frontend/assets/images/products/product4.jpg
            ',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 5',
            'photo'=>'frontend/assets/images/products/product5.jpg
            ',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 6',
            'photo'=>'frontend/assets/images/products/product6.jpg
            ',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 7',
            'photo'=>'frontend/assets/images/products/product7.jpg
            ',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 8',
            'photo'=>'frontend/assets/images/products/product8.jpg
            ',
        ]);
        Product::create([
            'title'=>'منتج سيراميك 9',
            'photo'=>'frontend/assets/images/products/product9.jpg
            ',
        ]);
    }
}
