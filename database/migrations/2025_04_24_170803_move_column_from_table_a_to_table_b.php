<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Remove the column from table_a
        Schema::table('data', function (Blueprint $table) {
            $table->dropColumn('video');
        });

        // Add the column to table_b
        Schema::table('categories', function (Blueprint $table) {
            $table->string('video')->nullable(); // Adjust type as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        // Reverse the changes
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('video');
        });

        Schema::table('data', function (Blueprint $table) {
            $table->string('video')->nullable(); // Match original column type
        });
    }
};
