<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $supervisor = Role::create(['name' => 'supervisor']);
        $salesman = Role::create(['name' => 'salesman']);

        $admin->givePermissionTo(Permission::create(['name' => 'create.lead', 'guard_name' => 'web']));
        $admin->givePermissionTo(Permission::create(['name' => 'create.stage', 'guard_name' => 'web']));
    }
}
