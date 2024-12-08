<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id'); // Foreign key for property
            $table->string('path'); // Image path
            $table->timestamps();

            // Add foreign key constraint
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('images');
    }
}
