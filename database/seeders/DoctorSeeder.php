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

        $images = [
            [
                'image' => 'uploads/doctor-1.jpeg',
            ],
            [
                'image' => 'uploads/doctor-2.jpg',
            ],
            [
                'image' => 'uploads/doctor-3.jpg',
            ],
            [
                'image' => 'uploads/doctor-4.jpg',
            ],
            [
                'image' => 'uploads/doctor-5.jpg',
            ],
            [
                'image' => 'uploads/doctor-6.jpg',
            ],
            [
                'image' => 'uploads/doctor-7.png',
            ],
            [
                'image' => 'uploads/doctor-8.jpg',
            ],
            [
                'image' => 'uploads/doctor-9.jpg',
            ],
            [
                'image' => 'uploads/doctor-10.jpg',
            ],
            [
                'image' => 'uploads/doctor-11.jpg',
            ],
            [
                'image' => 'uploads/doctor-12.jpg',
            ],
            [
                'image' => 'uploads/doctor-13.jpg',
            ],
            [
                'image' => 'uploads/doctor-14.jpg',
            ],
            [
                'image' => 'uploads/doctor-15.jpg',
            ],
            [
                'image' => 'uploads/doctor-16.jpg',
            ],
            [
                'image' => 'uploads/doctor-17.jpg',
            ],
            [
                'image' => 'uploads/doctor-18.jpg',
            ],
            [
                'image' => 'uploads/doctor-19.jpg',
            ],
            [
                'image' => 'uploads/doctor-20.jpg',
            ],
            [
                'image' => 'uploads/doctor-21.jpg',
            ],
            [
                'image' => 'uploads/doctor-22.jpg',
            ],
            [
                'image' => 'uploads/doctor-23.jpg',
            ],
            [
                'image' => 'uploads/doctor-24.jpg',
            ],
        ];


        Schema::disableForeignKeyConstraints();
        Doctor::truncate();
        Schema::enableForeignKeyConstraints();

        
        $imagesCount = count($images);
        $index = 0;

        for($i = 1; $i <= 500; $i++) {

            $newDoctor = new Doctor();
            $newDoctor->user_id = $i;
            $newDoctor->cv = "";
            $newDoctor->photo = $images[$index]['image'];
            $newDoctor->address = $faker->address();
            $newDoctor->services = "Visita di controllo, esami.";
            $newDoctor->phone_number = $faker->phoneNumber();
        
            $newDoctor->save();
        
            $index = ($index + 1) % $imagesCount;
        }
    }
}
