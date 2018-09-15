<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmDriversInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_drivers_info', function (Blueprint $table) {
            $table->integer('reg_user_id');
            $table->string('reg_driver_firstname');
            $table->string('reg_driver_lastname');
            $table->string('reg_driver_gender');
            $table->text('reg_driver_address');
            $table->string('reg_driver_street');
            $table->string('reg_driver_location');
            $table->string('reg_driver_city');
            $table->string('reg_driver_state');
            $table->string('reg_driver_pincode');
            $table->integer('reg_driver_status');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qdm_drivers_info');
    }
}
