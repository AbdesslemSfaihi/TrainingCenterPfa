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
        Schema::create('trainee_seance', function (Blueprint $table) {
            $table->bigInteger('trainee_id')->unsigned();
            $table->bigInteger('seance_id')->unsigned();
            $table->primary(['trainee_id', 'seance_id']);
            $table->foreign('trainee_id')->references('id')->on('trainees');
            $table->foreign('seance_id')->references('id')->on('seances');
            $table->integer('AbsenceStatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainee_seance');
    }
};
