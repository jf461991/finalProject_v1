<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administratives', function (Blueprint $table) {
            $table->increments('adm_id');
            $table->integer('rol_id');
            $table->string('adm_name');
            $table->string('adm_lastName');
            $table->string('adm_idCard');

            $table->date('adm_birthDate');
            $table->string('adm_address');
            $table->string('adm_city');
            $table->string('adm_gender');
            $table->string('adm_phone');
            $table->string('adm_lastLevelPass');

            $table->string('adm_email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('adm_password');
            $table->string('adm_photo');
            $table->boolean('adm_status');
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
        Schema::dropIfExists('administratives');
    }
}
