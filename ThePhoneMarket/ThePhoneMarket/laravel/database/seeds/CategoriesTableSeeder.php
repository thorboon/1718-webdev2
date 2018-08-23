<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class)->create([
            'title' => 'Apple'
        ]);

        factory(Category::class)->create([
            'title' => 'Samsung'
        ]);

        factory(Category::class)->create([
            'title' => 'One Plus'
        ]);

        factory(Category::class)->create([
            'title' => 'Acer'
        ]);
    }
}
