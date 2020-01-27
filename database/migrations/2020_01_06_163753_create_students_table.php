<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('stu_id');
            $table->integer('rol_id');
            $table->string('stu_name');
            $table->string('stu_lastName');
            $table->string('stu_idCard');

            $table->date('stu_birthDate');
            $table->string('stu_address');
            $table->string('stu_city');
            $table->string('stu_gender');
            $table->string('stu_phone');
            $table->string('stu_lastLevelPass');

            $table->string('stu_email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('stu_password');
            $table->string('stu_photo');
            $table->boolean('stu_status');
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
        Schema::dropIfExists('students');
    }
}
