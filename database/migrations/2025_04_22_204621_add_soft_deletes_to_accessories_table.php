<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSoftDeletesToAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('accessories', function (Blueprint $table) {
            $table->softDeletes(); // Adds a 'deleted_at' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accessories', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}