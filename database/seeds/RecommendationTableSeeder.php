<?php

use Illuminate\Database\Seeder;

class RecommendationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $recommendations = factory(App\Recommendation::class)->times(50)->create();

        foreach ($recommendations as $recommendation) {
            $recommendation->fromUser()->associate(App\Patient::inRandomOrder()->first()->user);
            $recommendation->toUser()->associate(App\Doctor::inRandomOrder()->first()->user);
            $recommendation->save();
        }


    }
}
