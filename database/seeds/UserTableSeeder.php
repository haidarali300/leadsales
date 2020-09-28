<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'admin', 
            'email' => 'admin@demo.com', 
            'password' => Hash::make('123456'),
            'api_token' => Str::random(60)
        ]);
        $supervisor = User::create([
            'name' => 'supervisor', 
            'email' => 'supervisor@demo.com', 
            'password' => Hash::make('123456'),
            'api_token' => Str::random(60)
        ]);
        $salesman = User::create([
            'name' => 'salesman', 
            'email' => 'salesman@demo.com', 
            'password' => Hash::make('123456'),
            'api_token' => Str::random(60)
        ]);

        $admin->assignRole(['admin']);
    }
}
