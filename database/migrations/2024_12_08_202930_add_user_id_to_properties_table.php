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
        // Check if the 'user_id' column exists before adding it
        if (!Schema::hasColumn('properties', 'user_id')) {
            Schema::table('properties', function (Blueprint $table) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};
