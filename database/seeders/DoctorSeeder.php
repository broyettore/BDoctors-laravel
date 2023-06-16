<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        $doctors = [
            [
                "user_id" => "1",
                "cv" => "",
                "photo" => "",
                'address' => '123 Maple Lane, Springville, Anytown, USA',
                'services' => 'General Medicine, Pediatrics',
                'phone_number' => '(555) 123-4567 ',
            ],
            [
                "user_id" => "2",
                "cv" => "",
                "photo" => "",
                'address' => '987 Willow Street, Brooksville, Anytown, USA',
                'services' => 'Dermatology, Allergy & Immunology',
                'phone_number' => '(555) 234-5678',
            ],
            [
                "user_id" => "3",
                "cv" => "",
                "photo" => "",
                'address' => '456 Oak Avenue, Sunnydale, Anytown, USA',
                'services' => 'Orthopedics, Cardiology',
                'phone_number' => '(555) 345-6789',
            ],
            [
                "user_id" => "4",
                "cv" => "",
                "photo" => "",
                'address' => '789 Elm Court, Riverview, Anytown, USA',
                'services' => 'Ophthalmology, Gastroenterology',
                'phone_number' => '(555) 456-7890',
            ],
            [
                "user_id" => "5",
                "cv" => "",
                "photo" => "",
                'address' => '321 Pine Road, Lakeside, Anytown, USA',
                'services' => 'Psychiatry, Endocrinology',
                'phone_number' => '(555) 567-8901',
            ]
        ];

        Schema::disableForeignKeyConstraints();
        Doctor::truncate();
        Schema::enableForeignKeyConstraints();

        foreach ($doctors as $doctor) {
            $new_doctor = new Doctor();

            foreach ($doctor as $key => $value) {
                $new_doctor->$key = $value;
            }

            $new_doctor->save();
        }
    }
}
