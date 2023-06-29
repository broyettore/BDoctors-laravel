<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        Schema::disableForeignKeyConstraints();
        Doctor::truncate();
        Schema::enableForeignKeyConstraints();

        for($i = 1; $i <= 500; $i++) {

            $newDoctor = new Doctor();
            $newDoctor->user_id = $i;
            $newDoctor->cv = "";
            $newDoctor->photo = "";
            $newDoctor->address = $faker->address();
            $newDoctor->services = "Visita di controllo, esami.";
            $newDoctor->phone_number = $faker->phoneNumber();

            $newDoctor->save();
        }
    }
}
