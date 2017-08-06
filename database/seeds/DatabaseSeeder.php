<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        $this->call(InstitutionTypeTableSeeder::class);
        $this->call(InstitutionTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(SpecialtyTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DoctorTableSeeder::class);
        $this->call(PatientTableSeeder::class);
        $this->call(RecommendationTableSeeder::class);

        $institutionTypes = factory(App\InstitutionType::class)->times(50)->create();
        $institutions = factory(App\Institution::class)->times(50)->create();
        $locations = factory(App\Location::class)->times(50)->create();
        $specialties = factory(App\Specialty::class)->times(50)->create();
        $users = factory(App\User::class)->times(50)->create();
        $doctors = factory(App\Doctor::class)->times(50)->create();
        $patients = factory(App\Patient::class)->times(50)->create();
        $recommendations = factory(App\Recommendation::class)->times(50)->create();

        foreach ($institutions as $institution) {

          $institution->institutionTypes()->sync($institutionTypes->random(1));
          $institution->parentInstitution()->sync($institution->random(1));

        }

        foreach ($locations as $location) {

          $location->parentLocation()->sync($location->random(1));

        }

        foreach ($specialties as $specialty) {

          $specialty->parentSpecialty()->sync($specialty->random(1));

        }

        foreach ($doctors as $doctor) {

          $doctor->user()->sync($user->random(1));

        }

        foreach ($patients as $patient) {

          $patient->user()->sync($user->random(1));

        }

        foreach ($recommendations as $recommendation) {

          $recommendation->fromUser()->sync($user->random(1));
          $recommendation->toUser()->sync($user->random(1));

        }


    }
}
