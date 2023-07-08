<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Brent',
            'true_price' => '89',
        ]);
        Type::create([
            'name' => 'WTI',
            'true_price' => '79',
        ]);
        Type::create([
            'name' => 'Arab Light',
            'true_price' => '86',
        ]);
        Type::create([
            'name' => 'Bonny Light',
            'true_price' => '86',
        ]);
        Type::create([
            'name' => 'ESPO',
            'true_price' => '75',
        ]);
        Type::create([
            'name' => 'DAS',
            'true_price' => '82',
        ]);
        Type::create([
            'name' => 'Basrah Medium',
            'true_price' => '81',
        ]);
        Type::create([
            'name' => 'Azeri Light',
            'true_price' => '94',
        ]);
        Type::create([
            'name' => 'Murbane Crude',
            'true_price' => '84',
        ]);
        Type::create([
            'name' => 'Iran Light',
            'true_price' => '83',
        ]);
    }
}
