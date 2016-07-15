<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WebsiteTruckRequirement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website_loads', function(Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('source');
            $table->string('destination');
            $table->string('cargo_capacity');
            $table->dateTime('date_required');
            $table->string('name');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('website_loads');
    }
}
