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
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 255)->change();
            $table->string('series', 255)->change();
            $table->string('type', 100)->change();
            $table->json('writers')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title', 30)->change();
            $table->string('series', 30)->change();
            $table->string('type', 30)->change();
            $table->string('writers')->change();
        });
    }
};
