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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 50)->unique();
            $table->string('no_telp', 14)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->enum('is_admin', [0,1])->default(0)->index();
            $table->string('avatar_image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('username');
            $table->dropUnique('username');

            $table->dropColumn('no_telp');
            $table->dropColumn('tgl_lahir');

            $table->dropColumn('is_admin');
            $table->dropIndex('is_admin');

            $table->dropColumn('avatar_image');
        });
    }
};
