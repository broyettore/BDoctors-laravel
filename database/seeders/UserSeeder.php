<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'first_name' => 'Gaspare',
                'last_name' => 'Monte',
                'email' => 'gaspare@icloud.com',
                'password' => '12345678'
            ],
            [
                'first_name' => 'Roy',
                'last_name' => 'Bagnarola',
                'email' => 'roy@gmail.com',
                'password' => '12345678'
            ],
            [
                'first_name' => 'Luca',
                'last_name' => 'Paolella',
                'email' => 'luca@outlook.com',
                'password' => '12345678'
            ],
            [
                'first_name' => 'Daniele',
                'last_name' => 'Balestro',
                'email' => 'daniele@yahoo.com',
                'password' => '12345678'
            ],
            [
                'first_name' => 'Mikel',
                'last_name' => 'Gremi',
                'email' => 'mikel@libero.com',
                'password' => '12345678'
            ]
        ];

        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($users as $user) {
            $new_user = new User();

            foreach ($user as $key => $value) {
                $new_user->$key = $value;
            }

            $new_user->save();
        }
    }
}
