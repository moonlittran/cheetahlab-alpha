<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('us_id');
            $table->bigInteger('code');
            $table->string('us_email', 191);
            $table->string('us_title');
            $table->string('us_name');
            $table->string('us_surname');
            $table->string('us_password');
            $table->string('reset_token');
            $table->enum('us_type', [0, 1, 2, 3]);
            $table->integer('us_school')->unsigned()->nullable();
            $table->integer('year');
            $table->date('us_enrolment_date');
            $table->double('us_balance');
            $table->integer('us_alias');
            $table->date('date');
            $table->string('parent_email_1', 191);
            $table->string('parent_email_2', 191);
            $table->string('paypal_email', 191);
            $table->integer('theme_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('us_school')->references('sch_id')->on('school')->onDelete('cascade');
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
