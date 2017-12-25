<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam', function (Blueprint $table) {
            $table->increments('exam_id');
            $table->string('title');
            $table->string('subject');
            $table->string('grade');
            $table->integer('weighting')->unsigned();
            $table->string('type');
            $table->integer('time_limit');
            $table->datetime('time_start');
            $table->datetime('time_expire');
            $table->string('status');
            $table->string('section_numbering');
            $table->string('question_numbering');
            $table->string('sub_question_numbering');
            $table->boolean('approved');
            $table->boolean('is_approved');
            $table->timestamp('approved_at')->nullable();
            $table->integer('created_by')->unsigned();
            $table->string('cover_image');
            $table->boolean('practice_purpose');
            $table->boolean('for_practice');
            $table->boolean('for_sale');
            $table->float('price');
            $table->float('discount');
            $table->integer('visited')->unsigned();
            $table->boolean('purchased');
            $table->timestamp('created_on')->nullable();
            $table->timestamp('approved_on')->nullable();
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
        Schema::dropIfExists('exam');
    }
}
