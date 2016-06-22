<?php


use App\User;
use Illuminate\Database\Seeder;


class IngredientsTableSeeder extends Seeder
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

            DB::table('ingredients')->insert([
                'name' => $faker->sentence(4),
                'created_by_id' => User::orderByRaw("RAND()")->first()->id,
                'created_at' => $date,
                'updated_at' => $dateUpdate,

            ]);
        }


    }
}
