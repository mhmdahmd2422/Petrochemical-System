<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create([
            'name' => 'الهيئة المصرية العامة للبترول (EGPC)',
            'product' => '1',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'الأسكندرية للبترول (APC)',
            'product' => '1',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'مصر للبترول (MISR)',
            'product' => '1',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'النصر للبترول (APC)',
            'product' => '1',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'المصرية القابضة للبتروكيمويات (ECHEM)',
            'product' => '1',
            'price' => '11',
            'dis_hq' => '200',
        ]);


        Manufacturer::create([
            'name' => 'الهيئة المصرية العامة للبترول (EGPC)',
            'product' => '2',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'مصر للبترول (MISR)',
            'product' => '2',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'المصرية القابضة للبتروكيمويات (ECHEM)',
            'product' => '2',
            'price' => '11',
            'dis_hq' => '200',
        ]);


        Manufacturer::create([
            'name' => 'الهيئة المصرية العامة للبترول (EGPC)',
            'product' => '3',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'الأسكندرية للبترول (APC)',
            'product' => '3',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'النصر للبترول (APC)',
            'product' => '3',
            'price' => '11',
            'dis_hq' => '200',
        ]);


        Manufacturer::create([
            'name' => 'مصر للبترول (MISR)',
            'product' => '4',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'النصر للبترول (APC)',
            'product' => '4',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'المصرية القابضة للبتروكيمويات (ECHEM)',
            'product' => '4',
            'price' => '11',
            'dis_hq' => '200',
        ]);

        Manufacturer::create([
            'name' => 'الهيئة المصرية العامة للبترول (EGPC)',
            'product' => '5',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'الأسكندرية للبترول (APC)',
            'product' => '5',
            'price' => '11',
            'dis_hq' => '200',
        ]);
        Manufacturer::create([
            'name' => 'مصر للبترول (MISR)',
            'product' => '5',
            'price' => '11',
            'dis_hq' => '200',
        ]);
    }
}
