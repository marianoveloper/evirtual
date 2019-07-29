<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinkscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {//links del curso del curso
        Schema::create('linkinscripts', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('course_id');
	        $table->foreign('course_id')->references('id')->on('courses');
	        $table->string('link');
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
        Schema::dropIfExists('linkscripts');
    }
}
