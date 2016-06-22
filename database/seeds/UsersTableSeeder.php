<?php


use Illuminate\Database\Seeder;
use Webpatser\Uuid\Uuid;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create();

        for ($i = 1; $i < 11; $i++) {

            $date = $faker->dateTimeBetween('-1 years', 'now');
            $dateUpdate = clone $date;
            $dateUpdate->modify('+' . rand(1, 10000) . ' minutes');

            DB::table('users')->insert([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => bcrypt('secret'),
                'created_at' => $date,
                'updated_at' => $dateUpdate,
            ]);
        }


    }
}
