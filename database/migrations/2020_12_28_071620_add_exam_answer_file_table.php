<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExamAnswerFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_answer_file', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id');
            $table->foreignId('exam_answer_id');
            $table->timestamps();

            $table->foreign('file_id')->references('id')->on('files');
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
        Schema::dropIfExists('exam_answer_file');
    }
}
