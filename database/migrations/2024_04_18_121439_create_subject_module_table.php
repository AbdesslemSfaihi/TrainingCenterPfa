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
        Schema::create('subject_module', function (Blueprint $table) {
            $table->bigInteger('subject_id')->unsigned();
            $table->bigInteger('module_id')->unsigned();
            $table->primary(['subject_id', 'module_id']);
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('module_id')->references('id')->on('modules');
            $table->integer('nbHours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_module');
    }
};
