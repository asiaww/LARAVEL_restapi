<?php


use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 21; $i++) {

            $date = $faker->dateTimeBetween('-1 years', 'now');
            $dateUpdate = clone $date;
            $dateUpdate->modify('+' . rand(1, 10000) . ' minutes');

            DB::table('recipes')->insert([
                'title' => $faker->sentence(2),
                'description' => $faker->paragraph(6),
                'required_time_in_minutes' => $faker->numberBetween(0, 60),
                'cuisine' => $this->cuisineList()[array_rand($this->cuisineList())],
                'category' => $this->categoryList()[array_rand($this->categoryList())],
                'created_by_id' => random_int(1, 10),
                'created_at' => $date,
                'updated_at' => $dateUpdate,
            ]);
        }

    }

    public function cuisineList()
    {
        return ['Greek', 'Italian American', 'Turkish', 'Russian', 'Jewish',
            'Vegan', 'Vegetarian', 'Bulgarian', 'Austrian', 'German',
            'Liechtensteiner', 'Serbian', 'Slovenian', 'Czech'];
    }

    public function categoryList()
    {
        return ['Breakfast', 'Lunch', 'Supper', 'Barbecue', 'Dessert', 'Snack'];
    }
}
