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
            $table->foreignId('kelas')->nullable()->constrained('kelases')->onDelete('cascade');
            $table->foreignId('jurusan')->nullable()->constrained('jurusans')->onDelete('cascade');
            $table->string('no_tlp')->nullable();
            $table->string('role')->default('siswa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
