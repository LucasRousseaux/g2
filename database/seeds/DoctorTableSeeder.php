<?php

use Illuminate\Database\Seeder;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $doctors = factory(App\Doctor::class)->times(50)->create();

        foreach ($doctors as $doctor) {

            $doctor->user()->associate(App\User::inRandomOrder()->first());
            $doctor->save();

        }


        foreach ($doctors as $doctor) {

          $doctor->institutions()->sync(App\Institution::inRandomOrder()->first());
          $doctor->specialties()->sync(App\Specialty::inRandomOrder()->first());
          $doctor->save();

        }

        $doctorlocations = factory(App\DoctorLocation::class)->times(50)->create();

        foreach ($doctorlocations as $doctorlocation) {

          $doctorlocation->doctor()->associate(App\Doctor::inRandomOrder()->first());
          $doctorlocation->location()->associate(App\Location::inRandomOrder()->first());
          $doctorlocation->save();

        }


    }
}
