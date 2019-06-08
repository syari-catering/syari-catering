<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call (KitchenCrewTableSeeder::class);
        $this->call(MenuScheduleTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(PacketRuleTableSeeder::class);
        $this->call(PacketTableSeeder::class);
    }
}
