<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = Permission::all();

        // Cashier Role
        $cashierRole = Role::create(['name' => 'cashier']);
        $cashierRole->givePermissionTo([
            'create-invoices',
            'read-invoices',
            'update-invoices',
            'delete-invoices',
            'create-users',
            'read-users',
            'update-users',
            'delete-users'
        ]);


        // Admin Role
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->syncPermissions($permissions);


        // Super Admin Role
        Role::create(['name' => 'super-admin']);
    }
}
