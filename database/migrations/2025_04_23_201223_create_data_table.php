<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedBigInteger('categorie_id');

            $table->string('data_name')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->string('audio')->nullable();
            $table->string('explication')->nullable(); 

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('categorie_id')
                  ->references('categorie_id')
                  ->on('categories')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('data');
    }
};
