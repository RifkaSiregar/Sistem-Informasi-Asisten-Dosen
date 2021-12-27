<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->string('course_initial');
            $table->string('name');
            $table->tinyInteger('credit');
            $table->integer('course_owner_id');
            $table->timestamps();
            $table->unique(["course_code", "course_owner_id"], 'course_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course', function (Blueprint $table) {
            $table->dropUnique('course_unique');
        });
    }
}
