<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        for($i = 1; $i <= 500; $i++) {

            $newUser = new User();
            $newUser->first_name = $faker->firstName('male'|'female');
            $newUser->last_name = $faker->lastName();
            $newUser->email = $newUser->first_name . $newUser->last_name . $i . "@gmail.com";
            $newUser->password = "12345678";

            $newUser->save();
        }
    }
}
