<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(InstitutionTypeTableSeeder::class);
        $this->call(InstitutionTableSeeder::class);
        $this->call(LocationTableSeeder::class);
        $this->call(SpecialtyTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DoctorTableSeeder::class);
        $this->call(PatientTableSeeder::class);
        $this->call(RecommendationTableSeeder::class);
        $this->call(FollowTableSeeder::class);

    } //run()
} // DataBaseSeeder
