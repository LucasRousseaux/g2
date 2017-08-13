<?php

use Illuminate\Database\Seeder;

class PatientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = factory(App\User::class)->times(50)->create();
        $patients = factory(App\Patient::class)->times(50)->create();

        foreach ($patients as $patient) {

          $patient->user()->associate(App\User::inRandomOrder()->first());
          $patient->save();

        }

        $patientlocations = factory(App\PatientLocation::class)->times(50)->create();

        foreach ($patientlocations as $patientlocation) {

          $patientlocation->patient()->associate(App\Patient::inRandomOrder()->first());
          $patientlocation->location()->associate(App\Location::inRandomOrder()->first());
          $patientlocation->save();

        }



    }
}
