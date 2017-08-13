<?php

use Illuminate\Database\Seeder;

class FollowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $follows = factory(App\Follow::class)->times(50)->create();

        foreach ($follows as $follow) {
            $follow->fromUser()->associate(App\Patient::inRandomOrder()->first()->user);
            $follow->toUser()->associate(App\Doctor::inRandomOrder()->first()->user);
            $follow->save();
        }


    }
}
