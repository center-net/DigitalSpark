<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\safe;
use Faker\Factory;

class SafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $safe = Safe::create(['name' => 'Main vault',  'phone'=> $faker->unique()->e164PhoneNumber(),'status' => true, 'parent_id' => null]);
        Safe::create(['name' => 'tha car', 'phone'=> $faker->unique()->e164PhoneNumber(),  'status' => true, 'parent_id' => $safe->id]);
        Safe::create(['name' => 'The shop', 'phone'=> $faker->unique()->e164PhoneNumber(), 'status' => true, 'parent_id' => $safe->id]);
        Safe::create(['name' => 'online ', 'phone'=> $faker->unique()->e164PhoneNumber(), 'status' => true, 'parent_id' => $safe->id]);


    }
}
