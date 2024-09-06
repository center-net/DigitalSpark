<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_id = Role::where('key','administrator')->first()->id;

        $role = new User();
        $role->username = 'admin';
        $role->email = 'admin@admin.com';
        $role->email_verified_at = now();
        $role->password = Hash::make('123123');
        $role->remember_token = 'Str::random(10)';
        $role->role_id = $role_id;
        $role->last_seen = null;
        $role->save();
        $role->name = 'Admin';
        $role->save();
    }
}
