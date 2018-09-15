<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmDriverBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_driver_bank_details', function (Blueprint $table) {
            $table->integer('reg_user_id');
            $table->string('reg_driver_bank_account_holder');
            $table->string('reg_driver_bank_account_no');
            $table->string('reg_driver_bank_name');
            $table->string('reg_driver_bank_branch');
            $table->string('reg_driver_bank_location');
            $table->string('reg_driver_bank_ifsc_code');
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
        Schema::dropIfExists('qdm_driver_bank_details');
    }
}
