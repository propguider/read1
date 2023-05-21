<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->length(50)->nullable();
            $table->string('last_name')->length(50)->nullable();
            $table->integer('age')->length(11)->nullable();
            $table->boolean('martial_status')->length(50)->nullable();
            $table->string('nationality')->length(50)->nullable();
            $table->string('religious')->length(50)->nullable();
            $table->string('blood_group')->length(50)->nullable();
            $table->string('designation')->length(50)->nullale();
            $table->string('qualification')->length(50)->nullable();
            $table->string('passport_no')->length(50)->nullable();
            $table->bigInteger('aadhar_no')->length(16)->nullable()->unsigned();
            $table->string('pan_no')->length(50)->nullable();
            $table->string('employee_id')->length(50)->nullable();
            $table->string('name_of_bank')->length(50)->nullable();
            $table->bigInteger('salary_account_no')->length(16)->nullable()->unsigned();
            $table->string('ifsc_code')->length(50)->nullable();
            $table->string('email')->length(50)->nullable();
            $table->string('password')->length(50)->nullable();
            $table->string('user_role')->length(50)->nullable();
            $table->string('status')->length(50)->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->timestamp('date_of_joining')->nullable();
            $table->timestamp('last_working_date')->nullable();
            $table->integer('created_by')->length(11)->nullable()->unsigned();
            $table->integer('updated_by')->length(11)->nullable()->unsigned();
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
        Schema::dropIfExists('users');
    }
}
