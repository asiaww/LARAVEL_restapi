<?php


use App\Ingredient;
use App\Recipe;
use Illuminate\Database\Seeder;


class RecipesIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 100; $i++) {

            $date = $faker->dateTimeBetween('-1 years', 'now');
            $dateUpdate = clone $date;
            $dateUpdate->modify('+' . rand(1, 10000) . ' minutes');

            DB::table('recipes_ingredients')->insert([
                'recipe_id' => Recipe::orderByRaw("RAND()")->first()->id,
                'ingredient_id' => Ingredient::orderByRaw("RAND()")->first()->id,
            ]);
        }

    }
}
