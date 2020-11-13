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

        $admin_permissions = [
            'leads.index',
            'leads.create',
            'leads.store',
            'leads.destroy',
            'leads.update',
            'leads.edit',
            'leads.show',
            'leads.new',
            'lead.qualities.store',
            'budgets.index',
            'budgets.store',
            'budgets.create',
            'budgets.update',
            'budgets.edit',
            'budgets.destroy',
            'budgets.show',
            'negotiations.index',
            'negotiations.store',
            'negotiations.create',
            'negotiations.update',
            'negotiations.edit',
            'negotiations.destroy',
            'negotiations.show',
            'categories.index',
            'categories.store',
            'categories.create',
            'categories.update',
            'categories.edit',
            'categories.destroy',
            'categories.show',
            'closings.index',
            'closings.store',
            'closings.create',
            'closings.update',
            'closings.edit',
            'closings.destroy',
            'closings.show',
            'home',
            'origins.index',
            'origins.store',
            'origins.create',
            'origins.update',
            'origins.edit',
            'origins.destroy',
            'origins.show',
            'qualities.index',
            'qualities.store',
            'qualities.create',
            'qualities.update',
            'qualities.edit',
            'qualities.destroy',
            'qualities.show',
            'setup.index',
            'setup.store',
            'setup.create',
            'setup.update',
            'setup.edit',
            'setup.destroy',
            'setup.show',
            'stats.index',
            'stats.store',
            'stats.create',
            'stats.update',
            'stats.edit',
            'stats.destroy',
            'stats.show',
            'users.index',
            'users.store',
            'users.create',
            'users.update',
            'users.edit',
            'users.destroy',
            'users.show',
            'leads.lost'
        ];

        $supervisor_permissions = [
            'leads.index',
            'leads.show',
            'users.update',
            'budgets.update',
            'budgets.store',
            'negotiations.update',
            'negotiations.store',
            'closings.update',
            'closings.store',
            'lead.qualities.store',
            'home'
        ];

        $salesman_permissions = [
            'leads.index',
            'leads.create',
            'leads.store',
            'leads.show',
            'leads.new',
            'leads.lost',
            'lead.qualities.store',
            'users.update',
            'budgets.update',
            'budgets.store',
            'negotiations.update',
            'negotiations.store',
            'closings.update',
            'closings.store',
            'home'
        ];

        foreach ($admin_permissions as $permission)
            Permission::create(['name' => $permission, 'guard_name' => 'web']);
        
        $admin->givePermissionTo(Permission::all());
        $supervisor->givePermissionTo($supervisor_permissions);
        $salesman->givePermissionTo($salesman_permissions);
    }
}
