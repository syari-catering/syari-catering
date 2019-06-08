<?php

use Illuminate\Database\Seeder;

class PacketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Packet::class, 50)->create();
    }
}
