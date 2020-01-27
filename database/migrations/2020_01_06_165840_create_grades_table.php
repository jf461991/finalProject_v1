<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('gra_id');
            $table->integer('per_id');
            $table->integer('stu_id');
            $table->integer('tea_id');
            $table->integer('sub_id');
            $table->integer('lev_id');
            $table->decimal('gra_partial1');
            $table->decimal('gra_partial2');
            $table->decimal('gra_extra');
            $table->boolean('gra_status');
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
        Schema::dropIfExists('grades');
    }
}
