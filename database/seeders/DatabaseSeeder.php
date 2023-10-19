<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = [
            ["name" => ucfirst("user")],
            ["name" => ucfirst("admin")],
        ];

        $users = [
            ["role_id" => 1, "name" => ucfirst("user"), "username" => "user", "password" => bcrypt("user12345678")],
            ["role_id" => 2, "name" => ucfirst("admin"), "username" => "admin", "password" => bcrypt("admin12345678")],
        ];

        Role::insert($roles);
        User::insert($users);
    }
}
