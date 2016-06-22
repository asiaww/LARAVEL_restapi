<?php


use App\User;
use Illuminate\Database\Seeder;


class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 101; $i++) {

            $date = $faker->dateTimeBetween('-1 years', 'now');
            $dateUpdate = clone $date;
            $dateUpdate->modify('+' . rand(1, 10000) . ' minutes');

            DB::table('comments')->insert([
                'content' => $faker->paragraph(10),
                'rate' => random_int(1, 10),
                'recipe_id' => random_int(1, 20),
                'created_by_id' => User::orderByRaw("RAND()")->first()->id,
                'created_at' => $date,
                'updated_at' => $dateUpdate,

            ]);
        }


    }
}
