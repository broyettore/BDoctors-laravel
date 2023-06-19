<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_sponsorship', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('doctor_id')->unsigned();
            $table->unsignedBiginteger('sponsorship_id')->unsigned();

            $table->foreign('doctor_id')->references('id')
                ->on('doctors')->onDelete('cascade');
            $table->foreign('sponsorship_id')->references('id')
                ->on('sponsorships')->onDelete('cascade');

            $table->date('end_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_sponsorship');
    }
};
