<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_activity', function (Blueprint $table) {
            $table->increments('log_number');
            $table->string('semester_id');
            $table->integer('schedule_id');
            $table->integer('attendance');
            $table->string('activity_type');
            $table->datetime('date_time');
            $table->string('description')->nullable();;
            $table->string('activityreport')->nullable();;
            $table->string('status')->nullable();
            $table->integer('attachment_id')->nullable();
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
        Schema::dropIfExists('log_activity');
    }
}
