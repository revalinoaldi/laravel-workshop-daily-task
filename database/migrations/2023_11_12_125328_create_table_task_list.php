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
        Schema::create('task_list', function (Blueprint $table) {
            $table->id();
            $table->string('kode_task')->unique();
            $table->unsignedBigInteger('daily_task_id');
            $table->string('task_detail');
            $table->dateTime('finish_date')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->timestamps();

            $table->foreign('daily_task_id')->references('id')->on('daily_task')->onDelete('CASCADE');
            $table->foreign('status_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_list');
    }
};
