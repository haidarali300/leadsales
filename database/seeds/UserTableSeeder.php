<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create(['name' => 'admin', 'email' => 'admin@demo.com', 'password' => Hash::make('123456')]);
        $supervisor = User::create(['name' => 'supervisor', 'email' => 'supervisor@demo.com', 'password' => Hash::make('123456')]);
        $salesman = User::create(['name' => 'salesman', 'email' => 'salesman@demo.com', 'password' => Hash::make('123456')]);

        $admin->assignRole(['admin']);
    }
}
