<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('topic_id')->nullable();
            $table->unsignedBigInteger('teacher_subject_id')->nullable();
            $table->string('name', 45);
            $table->integer('pass_percent');
            $table->integer('duration')->nullable();
            $table->timestamps();

            $table->foreign('topic_id')->references('id')->on('topics');
            $table->foreign('teacher_subject_id')->references('id')->on('teacher_subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
