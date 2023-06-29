<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DoctorSpecialisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $y = 1;

        for ($i=1; $i <= 500; $i++) { 
           $doctor = Doctor::find($i);
           $doctor->specialisations()->sync([$y]);

           if ($y === 21) {
            $y = 1;
           } else {
            $y++;
           }
        }
    }
}
