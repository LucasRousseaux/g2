<?php

use Illuminate\Database\Seeder;

class InstitutionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $institutions = factory(App\Institution::class)->times(50)->create();

        foreach ($institutions as $institution) {

          $institution->institutionTypes()->associate(App\InstitutionType::inRandomOrder()->first());
          $institution->save();

        }

    }
}
