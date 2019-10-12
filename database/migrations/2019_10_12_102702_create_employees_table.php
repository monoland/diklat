<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('name')->index();
            $table->string('grade')->nullable();
            $table->string('position')->nullable();
            $table->string('level')->nullable();
            $table->unsignedSmallInteger('year')->nullable();
            $table->smallInteger('length_id')->default(1);
            $table->unsignedBigInteger('agency_id')->index();
            $table->enum('gender', ['L', 'P'])->default('L');
            $table->unsignedSmallInteger('age')->default(18);
            $table->string('education')->nullable();
            $table->timestamps();
        });

        Schema::create('employee_question', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_id')->index();
            $table->unsignedBigInteger('question_id')->index();
            $table->string('answer')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
        Schema::dropIfExists('employee_question');
    }
}
