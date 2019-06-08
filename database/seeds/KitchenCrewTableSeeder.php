<?php

use Illuminate\Database\Seeder;

class KitchenCrewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\KitchenCrew::class, 50)->create();
    }
}
