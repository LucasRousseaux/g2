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
        // $this->call(UsersTableSeeder::class);


        $this->call(InstitutionsTypeTableSeeder::class);
        $this->call(InstitutionsTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(SpecialtiesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(RecommendationsTableSeeder::class);

        $institutionsType = factory(InstitutionsType::class)->times(50)->create();
        $institutions = factory(Institutions::class)->times(50)->create();
        $locations = factory(Locations::class)->times(50)->create();
        $specialties = factory(Specialties::class)->times(50)->create();
        $users = factory(User::class)->times(50)->create();
        $doctors = factory(Doctor::class)->times(50)->create();
        $patients = factory(Patient::class)->times(50)->create();
        $recommendations = factory(Recommendation::class)->times(50)->create();

        foreach ($institutions as $institution) {

          $institution->institutiontype()->sync($institutionsType->random(1));
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
