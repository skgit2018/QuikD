<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_reference', function (Blueprint $table) {
            $table->integer('reg_user_id');
            $table->string('reg_driver_nominee1_name');
            $table->string('reg_driver_nominee1_email');
            $table->string('reg_driver_nominee1_mobile');
            $table->text('reg_driver_nominee1_address');
            $table->string('reg_driver_nominee2_name');
            $table->string('reg_driver_nominee2_email');
            $table->string('reg_driver_nominee2_mobile');
            $table->text('reg_driver_nominee2_address');
            $table->string('reg_driver_nominee3_name');
            $table->string('reg_driver_nominee3_email');
            $table->string('reg_driver_nominee3_mobile');
            $table->text('reg_driver_nominee3_address');
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
        Schema::dropIfExists('driver_reference');
    }
}
