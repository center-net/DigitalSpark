<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;
use App\Models\ProductCategory;
use Faker\Factory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $categories = ProductCategory::whereNotNull('parent_id')->pluck('id');

        for ($i = 1; $i <= 100; $i++) {
                $clothes = new Product();
                $clothes->slug                  = $faker->unique()->slug(2, true);
                $clothes->price                 = $faker->numberBetween(5, 200);
                $clothes->quantity              = $faker->numberBetween(10, 100);
                $clothes->product_category_id   = $categories->random();
                $clothes->featured              = rand(0, 1);
                $clothes->status                = true;
                $clothes->save();
                
        }

            $clothes->name = $faker->sentence(2, true);
            $clothes->description = $faker->paragraph;
            $clothes->save();

    }
}
