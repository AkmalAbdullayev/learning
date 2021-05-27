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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id');
            $table->string('full_name');
            $table->date('birthday')->nullable();
            $table->text('address')->nullable();
            $table->text('biography')->nullable();
            $table->string('education_level')->nullable();
            $table->integer('experience')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('school')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');;
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
