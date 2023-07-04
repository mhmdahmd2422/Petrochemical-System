<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Type;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin',
            'usertype' => '1',
            'email' => 'admin@gmail.com',
            'phone' => '01000000000',
            'password' => '$2y$10$a5iWf/bTizVRmcXWymxUvuq9K2PaGpvYvXyEgJppsbMJ5ZWR8wZjO',
        ]);

        User::create([
            'name' => 'User',
            'usertype' => '0',
            'email' => 'user@gmail.com',
            'phone' => '01200000000',
            'password' => '$2y$10$a5iWf/bTizVRmcXWymxUvuq9K2PaGpvYvXyEgJppsbMJ5ZWR8wZjO',
        ]);

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

        Vendor::create([
           'type_id' => '1',
           'name' => 'GPC',
           'price' => '92',
           'dis_hq' => '200',
        ]);
        Vendor::create([
            'type_id' => '1',
            'name' => 'ECHEM',
            'price' => '92',
            'dis_hq' => '200',
        ]);
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
