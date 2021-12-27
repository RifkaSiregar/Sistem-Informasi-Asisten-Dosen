<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->increments('applicant_number');
            $table->string('participant_registration_number', 8);
            $table->integer('vacancy_id');
            $table->datetime('send_date');
            $table->string('score', 2);
            $table->text('motivation')->nullable();
            $table->boolean('decision')->nullable();
            $table->datetime('decision_date')->nullable();
            $table->integer('total_hour')->default(0);
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
        Schema::dropIfExists('application');
    }
}
