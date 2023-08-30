<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserIdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'superadmin',
            'email' => 'superadmin@azan.com',
            'password' => '123456',
            'super' => true
        ];

        User::create($user);
    }
}
