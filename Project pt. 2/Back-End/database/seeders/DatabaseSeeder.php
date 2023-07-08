<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Manufacturer;
use App\Models\Product;
use App\Models\Storage;
use App\Models\Transport;
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

        $this->call([
            TypeSeeder::class,
            VendorSeeder::class,
            ProductSeeder::class,
            ManufacturerSeeder::class,
        ]);

        Storage::create([
            'name' => 'Offshore Storage',
            'price' => '7000',
            'location' => 'https://www.google.com/maps/embed/v1/place?key=AIzaSyBydKVBN7SPKF3vzuNCUPjw0grIl4XqJzU&q=31.3367206,30.0607478'
        ]);
        Storage::create([
            'name' => 'Underground Storage',
            'price' => '9000',
            'location' => 'https://www.google.com/maps/embed/v1/place?key=AIzaSyBydKVBN7SPKF3vzuNCUPjw0grIl4XqJzU&q=31.0196327,32.9873243'
        ]);
        Storage::create([
            'name' => 'Ship Storage',
            'price' => '5500',
            'location' => 'https://www.google.com/maps/embed/v1/place?key=AIzaSyBydKVBN7SPKF3vzuNCUPjw0grIl4XqJzU&q=31.2147972,32.34368'
        ]);
        Storage::create([
            'name' => 'Tank Storage',
            'price' => '2500',
            'location' => 'https://www.google.com/maps/embed/v1/place?key=AIzaSyBydKVBN7SPKF3vzuNCUPjw0grIl4XqJzU&q=31.1378698,33.7823016'
        ]);

        Transport::create([
            'name' => 'Marine Vessels',
            'price' => '900',
        ]);
        Transport::create([
            'name' => 'Tank Trucks',
            'price' => '300',
        ]);
        Transport::create([
            'name' => 'Pipelines',
            'price' => '150',
        ]);
        Transport::create([
            'name' => 'Rail Trucks',
            'price' => '400',
        ]);
    }
}
