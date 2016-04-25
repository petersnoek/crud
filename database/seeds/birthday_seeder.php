<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class birthday_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('birthdays')->truncate();

        $faker = Faker::create('nl_NL');
        foreach (range(1,50) as $index) {
            $created = $faker->dateTime();
            $id = DB::table('birthdays')->insertGetId([
                'name' => $faker->firstName . ' ' . $faker->lastName,
                'birthday' => $faker->randomElement($array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28)),
                'birthmonth' => $faker->randomElement($array = array(1,2,3,4,5,6,7,8,9,10,11,12)),
            ]);
        }
    }
}
