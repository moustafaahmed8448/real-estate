<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFeatureTable extends Migration
{
    public function up()
    {
        Schema::create('property_feature', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id')->constrained()->onDelete('cascade'); // Foreign key to properties table
            $table->foreignId('feature_id')->constrained()->onDelete('cascade'); // Foreign key to features table
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('property_feature');
    }
}
