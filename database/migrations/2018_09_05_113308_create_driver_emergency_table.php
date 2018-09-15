<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverEmergencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_emergency', function (Blueprint $table) {
            $table->integer('reg_user_id');
            $table->string('reg_driver_emergency_name');
            $table->string('reg_driver_emergency_email');
            $table->string('reg_driver_emergency_mobile');
            $table->string('reg_driver_emergency_landline');
            $table->integer('reg_user_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_emergency');
    }
}
