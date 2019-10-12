<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text')->index();
            $table->enum('type', ['indicator', 'requirement'])->default('indicator');
            $table->enum('mode', ['text', 'option'])->default('text');
            $table->jsonb('item')->nullable();
            $table->smallInteger('depth')->default(1);
            $table->boolean('active')->default(true);
            $table->unsignedBigInteger('subject_id')->index();
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
        Schema::dropIfExists('questions');
    }
}
