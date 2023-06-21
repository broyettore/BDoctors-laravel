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
        Schema::create('doctor_vote', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('doctor_id')->unsigned();
            $table->unsignedBiginteger('vote_id')->unsigned();
            $table->unsignedInteger('rating');
            $table->foreign('doctor_id')->references('id')
                 ->on('doctors')->onDelete('cascade');
            $table->foreign('vote_id')->references('id')
                ->on('votes')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_vote');
    }
};
