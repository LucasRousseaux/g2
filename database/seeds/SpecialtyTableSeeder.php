<?php

use Illuminate\Database\Seeder;

class SpecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $specialties = factory(App\Specialty::class)->times(50)->create();
        
    }
}
