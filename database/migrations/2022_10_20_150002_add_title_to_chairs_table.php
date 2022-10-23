<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('chairs', function (Blueprint $table) {
            $table->string('title');
            $table->string('img');
            $table->string('link');
            $table->string('price')->nullable();
            $table->string('rating')->nullable();
            $table->string('mumber')->nullable();
            $table->string('color')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('chairs', function (Blueprint $table) {
            //
        });
    }
};