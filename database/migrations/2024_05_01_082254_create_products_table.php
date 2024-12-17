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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('ProductID');
            $table->integer('CategoryID')->unsigned();
            $table->string('Name');
            $table->decimal('Price', 10, 2);
            $table->integer('Quantity');
            $table->text('Description')->nullable();
            $table->timestamps();
            $table->foreign('CategoryID')->references('CategoryID')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
