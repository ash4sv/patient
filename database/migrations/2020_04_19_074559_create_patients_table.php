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
            $table->string('sex')->nullable();
            $table->string('race')->nullable();
            $table->string('nationality')->nullable();
            $table->char('tel_no')->nullable();
            $table->char('emerg_no')->nullable();
            $table->string('address_building')->nullable();
            $table->string('address_street_1')->nullable();
            $table->string('address_street_2')->nullable();
            $table->string('address_town')->nullable();
            $table->string('state')->nullable();
            $table->char('postcode')->nullable();
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
