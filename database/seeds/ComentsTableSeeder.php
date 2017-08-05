<?php

use Illuminate\Database\Seeder;

class ComentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

           $limit = 34;

           for ($i = 0; $i < $limit; $i++) {
               DB::table('coments')->insert([ //,
                   'coment' => $faker->text($maxNbChars = 300),
                   'user_id' => $faker->numberBetween(0, 33),
               ]);
           }
    }
}
