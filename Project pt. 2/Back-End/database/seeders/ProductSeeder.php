<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Broban',
            'true_price' => '10767',
        ]);
        Product::create([
            'name' => 'Octane 95',
            'true_price' => '10',
        ]);
        Product::create([
            'name' => 'Diesel',
            'true_price' => '7',
        ]);
        Product::create([
            'name' => 'Kerosene',
            'true_price' => '8',
        ]);
        Product::create([
            'name' => 'Butane',
            'true_price' => '130',
        ]);
    }
}
