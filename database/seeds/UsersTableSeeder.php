<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'KitchenCrew']);

        $user = App\User::create([
            'name'  => 'admin',
            'email' => 'admin@gmail.com',
            'password'  => Hash::make('12345678'),
        ]);
        $user->assignRole('Admin');
    }
}
