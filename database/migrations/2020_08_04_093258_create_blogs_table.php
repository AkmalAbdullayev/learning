<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('content');
            $table->date('publish_date');
            $table->unsignedBigInteger('blog_type_id');
            $table->unsignedBigInteger('language_id');
            $table->timestamps();
            $table->foreign('language_id')
                ->references('id')
                ->on('languages');
            $table->foreign('blog_type_id')
                ->references('id')
                ->on('blog_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
