<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $role = new Role();
        $role->key = 'administrator';
        $role->color = 'bg-red-700 text-white';
        $role->save();
        $role->name = 'Administrator';
        $role->save();

        $role = new Role();
        $role->key = 'admin';
        $role->color = 'bg-orange-700 text-white';
        $role->save();
        $role->name = 'Admin';
        $role->save();

        $role = new Role();
        $role->key = 'moderator';
        $role->color = 'bg-green-700 text-white';
        $role->save();
        $role->name = 'Moderator';
        $role->save();

        $role = new Role();
        $role->key = 'user';
        $role->color = 'bg-gray-700 text-white';
        $role->save();
        $role->name = 'User';
        $role->save();

        $role = new Role();
        $role->key = 'banned';
        $role->color = 'bg-gray-700 text-white';
        $role->save();
        $role->name = 'Banned';
        $role->save();

        $permission_administrator = Permission::where('key','!=','banned')->pluck('id')->toArray();

        $admin_role = Role::where('key','administrator')->first();
        $admin_role->permission()->sync($permission_administrator);
    }
}
