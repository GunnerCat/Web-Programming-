<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'category_id'=>1,
                'name'=>"Cool Pixelated Cat",
                'detail'=>"Its a cat",
                'price'=>50000,
                'photo'=>"Images//1670776077.jpg",
            ],
            [
                'category_id'=>2,
                'name'=>"Confused cat in a glass",
                'detail'=>"He is very confused",
                'price'=>10,
                'photo'=>"images//1670779268.jpg",
            ],
            [
                'category_id'=>3,
                'name'=>"Cat le standing",
                'detail'=>"he stands",
                'price'=>100000,
                'photo'=>"Images//1670778183.jpg",
            ],
            [
                'category_id'=>4,
                'name'=>"Cat le standing",
                'detail'=>"he stands",
                'price'=>100000,
                'photo'=>"images//1670814373.jpg",
            ],
            [
                'category_id'=>5,
                'name'=>"Cat le standing",
                'detail'=>"he stands",
                'price'=>100000,
                'photo'=>"images//1670814389.jpg",
            ],
        ];
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
