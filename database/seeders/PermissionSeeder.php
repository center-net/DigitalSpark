<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $admin = new Permission();
        $admin->key = 'browse_admin';
        $admin->table_name = null;
        $admin->save();
        $admin->name = 'Browse admin';
        $admin->save();

        $admin = new Permission();
        $admin->key = 'administrator';
        $admin->table_name = null;
        $admin->save();
        $admin->name = 'Administrator';
        $admin->save();

        $admin = new Permission();
        $admin->key = 'banned';
        $admin->table_name = null;
        $admin->save();
        $admin->name = 'Banned';
        $admin->save();

        Permission::generateFor('permissions');
        Permission::generateFor('roles');
        Permission::generateFor('countries');
        Permission::generateFor('cities');
        Permission::generateFor('users');
    }
}