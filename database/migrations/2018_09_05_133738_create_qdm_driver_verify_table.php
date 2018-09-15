<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmDriverVerifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_driver_verify', function (Blueprint $table) {
            $table->integer('reg_user_id');
            // $table->integer('reg_driver_id');
             $table->string('reg_driver_verification_name');
             $table->string('reg_driver_verification_email');
             $table->string('reg_driver_verification_mobile');
             $table->string('reg_driver_verification_landline');
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
        Schema::dropIfExists('qdm_driver_verify');
    }
}
