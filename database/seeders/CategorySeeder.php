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
                'name'=>'Toy',
            ],
            [
                'name'=>'Makeup',
            ],
            [
                'name'=>'Games',
            ],
            [
                'name'=>'Animal',
            ],
            [
                'name'=>'Cooking',
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
