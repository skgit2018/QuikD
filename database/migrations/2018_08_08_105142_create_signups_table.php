<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qdm_users', function (Blueprint $table) {
            $table->increments('reg_user_id');
            $table->string('reg_user_name');
            $table->string('reg_user_pwd');
            $table->string('reg_user_email');
            $table->string('reg_mobile_number');
            $table->string('reg_user_account_type');
            $table->string('reg_user_otp');
            $table->string('reg_user_ip_address');
            $table->string('reg_user_created_date');
            $table->string('reg_user_updated_date');
            $table->integer('reg_user_status');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qdm_users');
    }
}
