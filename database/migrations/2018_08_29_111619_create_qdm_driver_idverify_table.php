<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmDriverIdverifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_driver_idverify', function (Blueprint $table) {
            $table->integer('reg_user_id');
            $table->string('reg_driver_experience');
            $table->string('reg_driver_aadhar_card');
            $table->string('reg_driver_pancard');
            $table->string('reg_driver_license');
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
        Schema::dropIfExists('qdm_driver_idverify');
    }
}
