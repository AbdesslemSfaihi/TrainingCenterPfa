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
        Schema::create('trainee_sess', function (Blueprint $table) {
            $table->bigInteger('trainee_id')->unsigned();
            $table->bigInteger('sess_id')->unsigned();
            $table->primary(['trainee_id', 'sess_id']);
            $table->foreign('trainee_id')->references('id')->on('trainees');
            $table->foreign('sess_id')->references('id')->on('sesses');
            $table->integer('paymentDate');
            $table->integer('paidAmount');
            $table->integer('paymentStatus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainee_sess');
    }
};
