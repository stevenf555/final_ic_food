<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodMappingIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_mapping_ingredients') -> insert([
            [
                'foodId' => 1,
                'ingredientId' => 1,
                'amount' => 3
            ],
            [
                'foodId' => 1,
                'ingredientId' => 4,
                'amount' => 1
            ],
            [
                'foodId' => 1,
                'ingredientId' => 6,
                'amount' => 2
            ],
            [
                'foodId' => 1,
                'ingredientId' => 7,
                'amount' => 6
            ],
            [
                'foodId' => 2,
                'ingredientId' => 2,
                'amount' => 2
            ],
            [
                'foodId' => 2,
                'ingredientId' => 1,
                'amount' => 1
            ],
            [
                'foodId' => 2,
                'ingredientId' => 5,
                'amount' => 3
            ],
            [
                'foodId' => 2,
                'ingredientId' => 3,
                'amount' => 5
            ],
            [
                'foodId' => 2,
                'ingredientId' => 7,
                'amount' => 4
            ],
            [
                'foodId' => 2,
                'ingredientId' => 3,
                'amount' => 8
            ],
            [
                'foodId' => 2,
                'ingredientId' => 3,
                'amount' => 8
            ],
        ]);
    }
}
