<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $users = factory(App\User::class)->times(50)->create();

//      $faker = Faker\Factory::create();

//        $limit = 50;

//        for ($i = 0; $i < $limit; $i++) {
//            DB::table('users')->insert([ //,
//                'name' => $faker->name,
//                'email' => $faker->unique()->email,
//                'password' => $faker->password,
//                'language' => 'Spanish',
//            ]);
//        }


    }
}
