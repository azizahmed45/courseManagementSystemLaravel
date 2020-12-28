<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_marks', function (Blueprint $table) {
            $table->id();
            $table->float('mark');
            $table->foreignId('assignment_id');
            $table->foreignId('student_id');
            $table->foreignId('assignment_answer_id');
            $table->timestamps();

            $table->foreign('assignment_id')->references('id')->on('assignments');
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('assignment_answer_id')->references('id')->on('assignment_answers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment_marks');
    }
}
