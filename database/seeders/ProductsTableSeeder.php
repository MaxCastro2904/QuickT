<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Apio',
            'price' => 2.69,
            'shipping_cost' => 10,
            'category_id' => 1,
            'image_path' => 'Apio.jpg'
        ]);

    }
}
