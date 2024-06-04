<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Admin permissions
        Permission::create(['name' => 'create-roles']);
        Permission::create(['name' => 'create-permissions']);
        Permission::create(['name' => 'assign-roles-to-user']);
        Permission::create(['name' => 'revoke-roles-to-user']);
        Permission::create(['name' => 'assign-permissions-to-role']);
        Permission::create(['name' => 'revoke-permissions-to-role']);

        // Cashier permissions
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'read-users']);
        Permission::create(['name' => 'update-users']);
        Permission::create(['name' => 'delete-users']);
        Permission::create(['name' => 'create-invoices']);
        Permission::create(['name' => 'read-invoices']);
        Permission::create(['name' => 'update-invoices']);
        Permission::create(['name' => 'delete-invoices']);
    }
}
