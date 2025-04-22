<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('accessories', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['instrument_id']);
            
            // Now, drop the 'instrument_id' column
            $table->dropColumn('instrument_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accessories', function (Blueprint $table) {
            // Add the 'instrument_id' column back
            $table->unsignedBigInteger('instrument_id')->nullable();

            // Recreate the foreign key constraint
            $table->foreign('instrument_id')->references('id')->on('instruments')->onDelete('cascade');
        });
    }
};
