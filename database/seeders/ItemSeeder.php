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
                'name'=>"Los Pollos Fermanos gunns",
                'detail'=>"DIUTHIDUFGJNKSDLCXMFVSXKLZMC",
                'price'=>1142124,
                'photo'=>"odifngjmkiodmfg",
            ],
            [
                'category_id'=>2,
                'name'=>"Make ups for the REAL MANNN by pharah los carlos",
                'detail'=>"DIUTHIDUFGJNKSDLCXMFVSXKLZMC",
                'price'=>61212412,
                'photo'=>"odifngjmkiodmfg",
            ],
            [
                'category_id'=>3,
                'name'=>"Actuall gun",
                'detail'=>"sfasa",
                'price'=>61212412,
                'photo'=>"odifngjmkiodmfg",
            ],
        ];
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
