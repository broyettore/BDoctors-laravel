<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Sponsorship::truncate();
        Schema::enableForeignKeyConstraints();

        $basic_sponsorship = new Sponsorship();
        $basic_sponsorship->name = 'Basic';
        $basic_sponsorship->price = 2.99;
        $basic_sponsorship->duration = 24;
        $basic_sponsorship->save();

        $silver_sponsorship = new Sponsorship();
        $silver_sponsorship->name = 'Silver';
        $silver_sponsorship->price = 5.99;
        $silver_sponsorship->duration = 72;
        $silver_sponsorship->save();

        $gold_sponsorship = new Sponsorship();
        $gold_sponsorship->name = 'Gold';
        $gold_sponsorship->price = 9.99;
        $gold_sponsorship->duration = 144;
        $gold_sponsorship->save();
    }
}
