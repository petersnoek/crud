<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // enable truncating tables
        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // now run seeders
        $this->call(birthday_seeder::class);

        // re-enable checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


    }
}
