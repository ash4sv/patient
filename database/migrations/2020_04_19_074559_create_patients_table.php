<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->char('ref_num')->nullable();
            $table->string('name');
            $table->char('ic_num')->unique();
            $table->string('sex');
            $table->string('race');
            $table->string('nationality');
            $table->char('tel_no');
            $table->char('emerg_no')->nullable();
            $table->string('address_building');
            $table->string('address_street_1');
            $table->string('address_street_2')->nullable();
            $table->string('address_town');
            $table->string('state');
            $table->char('postcode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
