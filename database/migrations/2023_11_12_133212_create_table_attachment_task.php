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
        Schema::create('attachment_task', function (Blueprint $table) {
            $table->id();
            $table->string('attachment_name');
            $table->enum('attachment_type', ['image', 'document', 'other'])->default('other');
            $table->unsignedBigInteger('task_list_id');
            $table->timestamps();

            $table->foreign('task_list_id')->references('id')->on('task_list')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachment_task');
    }
};
