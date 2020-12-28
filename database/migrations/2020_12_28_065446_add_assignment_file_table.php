<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAssignmentFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_file', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id');
            $table->foreignId('assignment_id');
            $table->timestamps();

            $table->foreign('file_id')->references('id')->on('files');
            $table->foreign('assignment_id')->references('id')->on('assignments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignment_file');
    }
}
