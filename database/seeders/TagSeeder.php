<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tag = new Tag();
        $tag->slug = 'Clothes';
        $tag->save();
        $tag->name = 'Clothes';
        $tag->save();

        $tag = new Tag();
        $tag->slug = 'Shoes';
        $tag->save();
        $tag->name = 'Shoes';
        $tag->save();

        $tag = new Tag();
        $tag->slug = 'Watches';
        $tag->save();
        $tag->name = 'Watches';
        $tag->save();

        $tag = new Tag();
        $tag->slug = 'Electronics';
        $tag->save();
        $tag->name = 'Electronics';
        $tag->save();

        $tag = new Tag();
        $tag->slug = 'Men';
        $tag->save();
        $tag->name = 'Men';
        $tag->save();

        $tag = new Tag();
        $tag->slug = 'Women';
        $tag->save();
        $tag->name = 'Women';
        $tag->save();

        $tag = new Tag();
        $tag->slug = 'Boys';
        $tag->save();
        $tag->name = 'Boys';
        $tag->save();

        $tag = new Tag();
        $tag->slug = 'Girls';
        $tag->save();
        $tag->name = 'Girls';
        $tag->save();
        
    }
}
