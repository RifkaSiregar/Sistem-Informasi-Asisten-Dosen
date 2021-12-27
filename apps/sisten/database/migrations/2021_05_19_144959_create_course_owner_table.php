<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseOwnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_owner', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('curriculum');
            $table->string('level');
            $table->string('status');
            $table->string('description');
            $table->timestamps();
            $table->unique(["name", "curriculum"], 'course_owner_unique');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_owner', function (Blueprint $table) {
            $table->dropUnique('course_owner_unique');
        });
    }
}