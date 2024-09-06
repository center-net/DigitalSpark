<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ProductCategory = new ProductCategory();
        $ProductCategory->slug = 'longce';
        $ProductCategory->cover = 'longce';
        $ProductCategory->table_name = null;
        $ProductCategory->save();
        $ProductCategory->name = 'longce';
        $ProductCategory->save();

        $ProductCategory = new ProductCategory();
        $ProductCategory->slug = 'hikvision';
        $ProductCategory->cover = 'hikvision';
        $ProductCategory->table_name = null;
        $ProductCategory->save();
        $ProductCategory->name = 'hikvision';
        $ProductCategory->save();
    }
}
