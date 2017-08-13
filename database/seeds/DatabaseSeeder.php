<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use App\InstitutionType;

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
//        $this->call(InstitutionTypeTableSeeder::class);
//        $this->call(InstitutionTableSeeder::class);
//        $this->call(LocationTableSeeder::class);
//        $this->call(SpecialtyTableSeeder::class);
//        $this->call(UserTableSeeder::class);
//        $this->call(DoctorTableSeeder::class);
//        $this->call(PatientTableSeeder::class);
//        $this->call(RecommendationTableSeeder::class);

        $institutionTypes = factory(App\InstitutionType::class)->times(50)->create();
        $institutions = factory(App\Institution::class)->times(50)->create();
        $locations = factory(App\Location::class)->times(50)->create();
        $specialties = factory(App\Specialty::class)->times(50)->create();
        $recommendations = factory(App\Recommendation::class)->times(50)->create();
        $users = factory(App\User::class)->times(50)->create();
        $doctors = factory(App\Doctor::class)->times(50)->create();

        foreach ($doctors as $doctor) {

            $doctor->user()->associate(App\User::inRandomOrder()->first());

        }

        $users = factory(App\User::class)->times(50)->create();
        $patients = factory(App\Patient::class)->times(50)->create();

        foreach ($patients as $patient) {

          $patient->user()->associate(App\User::inRandomOrder()->first());

        }

        foreach ($recommendations as $recommendation) {
            $recommendation->fromUser()->associate(App\Patient::inRandomOrder()->first()->user());
            $recommendation->toUser()->associate(App\Doctor::inRandomOrder()->first()->user());
        }

        foreach ($doctors as $doctor) {

          $doctor->institutions()->sync($institutions->random(1));
          $doctor->specialties()->sync($specialties->random(2));

        }

        $doctorlocations = factory(App\DoctorLocation::class)->times(50)->create();

        foreach ($doctorlocations as $doctorlocation) {

          $doctorlocation->doctor()->associate(App\Doctor::inRandomOrder()->first());
          $doctorlocation->location()->associate(App\Location::inRandomOrder()->first());

        }

        $patientlocations = factory(App\PatientLocation::class)->times(50)->create();

        foreach ($patientlocations as $patientlocation) {

          $patientlocation->patient()->associate(App\Patient::inRandomOrder()->first());
          $patientlocation->location()->associate(App\Location::inRandomOrder()->first());

        }


        foreach ($institutions as $institution) {

          $institution->institutionTypes()->associate(App\InstitutionType::inRandomOrder()->first());

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
