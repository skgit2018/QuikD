<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQdmCustomerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_customer_info', function (Blueprint $table) {
            $table->integer('reg_user_id');
            $table->string('reg_customer_first_name');
            $table->string('reg_customer_last_name');
            $table->string('reg_customer_gender');
            $table->text('reg_customer_address');
            $table->string('reg_customer_street');
            $table->string('reg_customer_location');
            $table->string('reg_customer_city');
            $table->string('reg_customer_state');
            $table->string('reg_customer_pincode');
            $table->string('reg_customer_emergency_name');
            $table->string('reg_customer_emergency_email');
            $table->string('reg_customer_emergency_mobile');
            $table->string('reg_customer_emergency_landline');
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
        Schema::dropIfExists('qdm_customer_info');
    }
}
