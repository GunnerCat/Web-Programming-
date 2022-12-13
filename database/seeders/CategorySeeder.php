<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'=>'Video Games',
            ],
            [
                'name'=>'Toys & Games',
            ],
            [
                'name'=>'Tools & Home Improvement',
            ],
            [
                'name'=>'Movies & TV',
            ],
            [
                'name'=>'Computers',
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
