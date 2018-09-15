<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmDriverPoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_driver_pool', function (Blueprint $table) {
             $table->integer('reg_user_id');
            // $table->integer('reg_driver_id');
             $table->string('reg_driver_name');
             $table->string('reg_driver_time');
             $table->string('reg_driver_car');
             $table->string('reg_driver_payment');
             $table->string('reg_driver_updated_date');
             $table->string('reg_driver_extime');
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
        Schema::dropIfExists('qdm_driver_pool');
    }
}
