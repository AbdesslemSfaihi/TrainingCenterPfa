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
        Schema::create('trainer_subject_sess', function (Blueprint $table) {
            $table->bigInteger('subject_id')->unsigned();
            $table->bigInteger('trainer_id')->unsigned();
            $table->bigInteger('sess_id')->unsigned();
            $table->primary(['subject_id', 'trainer_id', 'sess_id']);
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('trainer_id')->references('id')->on('trainers');
            $table->foreign('sess_id')->references('id')->on('sesses');
            $table->integer('pricePH');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer_subject_sess');
    }
};
