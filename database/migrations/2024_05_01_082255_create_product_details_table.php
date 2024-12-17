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
        Schema::create('productdetails', function (Blueprint $table) {
            $table->increments('DetailID');
            $table->integer('ProductID')->unsigned();
            $table->string('ImageURL');
            $table->timestamps();

            $table->foreign('ProductID')->references('ProductID')->on('products')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productdetails');
    }
};
