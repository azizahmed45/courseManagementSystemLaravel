<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_marks', function (Blueprint $table) {
            $table->id();
            $table->float('mark');
            $table->foreignId('exam_id');
            $table->foreignId('student_id');
            $table->foreignId('exam_answer_id');
            $table->timestamps();

            $table->foreign('exam_id')->references('id')->on('exams');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('exam_answer_id')->references('id')->on('exam_answers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_marks');
    }
}
