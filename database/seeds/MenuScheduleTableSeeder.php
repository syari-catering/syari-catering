<?php

use Illuminate\Database\Seeder;

class MenuScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\MenuSchedule::class, 50)->create();
    }
}
