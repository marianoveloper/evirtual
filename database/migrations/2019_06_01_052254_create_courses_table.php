<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('teacher_id');
	        $table->foreign('teacher_id')->references('id')->on('teachers');
	        $table->unsignedInteger('category_id');
	        $table->foreign('category_id')->references('id')->on('categories');
	        $table->unsignedInteger('level_id');
	        $table->foreign('level_id')->references('id')->on('levels');
	        $table->string('name');//nombre del curso
            $table->text('description');//descripcion del curso
            $table->text('dirigido');//a quien va dirigido
	        $table->string('slug');//url amigable del curso
            $table->string('picture')->nullable();//imagen del curso
            $table->string('picture2')->nullable();//imagen del curso
            $table->string('dirigido');
            $table->string('Fecha_inicio');
            $table->string('Pdf')->nullable();//pdf descripcion del curso
            $table->integer('costo');//precio ARS del curso
	        $table->enum('status', [
	        	\App\Course::PUBLISHED, \App\Course::PENDING, \App\Course::REJECTED
	        ])->default(\App\Course::PENDING);
	        $table->boolean('previous_approved')->default(true);
	        $table->boolean('previous_rejected')->default(false);
            $table->timestamps();
            $table->softDeletes();//borrado logico column delete at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
