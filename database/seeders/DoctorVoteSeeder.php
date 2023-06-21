<?php

namespace Database\Seeders;
use App\Models\Doctor;
use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = Doctor::all();
        $votes = Vote::pluck('id')->toArray();

        for ($i = 0; $i < 200; $i++) {
            $doctor = $doctors->random();
            $voteId = array_rand($votes);
            $rating = rand(2, 5);

            $doctor->votes()->attach($votes[$voteId], ['rating' => $rating]);
        }
    }
}
