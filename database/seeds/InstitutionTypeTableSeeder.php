<?php

use Illuminate\Database\Seeder;

class InstitutionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $institutionTypes = factory(App\InstitutionType::class)->times(50)->create();

    }
}
