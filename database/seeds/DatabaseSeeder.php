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

        $users = factory(App\User::class)->times(50)->create();
        $doctors = factory(App\Doctor::class)->times(50)->create();

        foreach ($users as $user) {

          $user->doctor()->save(factory(App\Doctor::class)->make());
          $user->isRecommended()->save(factory(App\Recommendation::class)->make());
        }

        $users = factory(App\User::class)->times(50)->create();
        $patients = factory(App\Patient::class)->times(50)->create();

        foreach ($users as $user) {

          $user->patient()->save(factory(App\Patient::class)->make());
          $user->recommendations()->save(factory(App\Recommendation::class)->make());
        }

        $institutionTypes = factory(App\InstitutionType::class)->times(50)->create();
        $institutions = factory(App\Institution::class)->times(50)->create();
        $locations = factory(App\Location::class)->times(50)->create();
        $specialties = factory(App\Specialty::class)->times(50)->create();
        $recommendations = factory(App\Recommendation::class)->times(50)->create();


        foreach ($doctors as $doctor) {

          $doctor->institutions()->sync($institutions->random(2));
          $doctor->locations()->sync($locations->random(2));
          $doctor->specialties()->sync($specialties->random(2));

        }

        foreach ($patients as $patient) {

          $patient->locations()->sync($locations->random(2));

        }


        foreach ($institutionTypes as $institutionType) {

          factory(Institution::class,4)->create([
            'institution_type_id' => $institutionType->id,
          ]);

        }


        /*
                foreach ($institutions as $institution) {

                  factory(Institution::class,1)->create([
                    'parent_institution_id' => $institution->id,
                  ]);


                }


                foreach ($locations as $location) {

                  factory(Location::class,1)->create([
                    'parent_location_id' => $location->id,
                  ]);


                }

                foreach ($specialties as $specialty) {

                  factory(Specialty::class,1)->create([
                    'parent_specialty_id' => $specialty->id,
                  ]);


                }


        */

    } //run()
} // DataBaseSeeder
