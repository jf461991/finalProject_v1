<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('tea_id');
            $table->integer('rol_id');
            $table->string('tea_name');
            $table->string('tea_lastName');
            $table->string('tea_idCard');

            $table->date('tea_birthDate');
            $table->string('tea_address');
            $table->string('tea_city');
            $table->string('tea_gender');
            $table->string('tea_phone');
            //$table->string('lastLevelPass');

            $table->string('tea_email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tea_password');
            $table->string('tea_photo');
            $table->boolean('tea_status');
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::dropIfExists('teachers');
    }
}
