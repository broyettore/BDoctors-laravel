<?php

namespace Database\Seeders;

use App\Models\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Vote::truncate();
        Schema::enableForeignKeyConstraints();

        for ($i=1; $i <= 5; $i++) { 
            $new_vote = new Vote();
            $new_vote->value = $i;
            $new_vote->save();
        }
    }
}
