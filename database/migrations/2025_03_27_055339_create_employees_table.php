<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->foreignId('person_id')->constrained('people')->onDelete('cascade');
            $table->string('employee_id')->unique();
            $table->foreignId('department_id')->constrained('departments')->onDelete('cascade');
            $table->string('designation')->nullable();
            $table->date('hired_date')->nullable();
            $table->foreignId('supervisor_person_id')->constrained('people')->onDelete('cascade');
            $table->date('created_at')->nullable();
            $table->timestamp('updated_at')->useCurrentOnUpdate();
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
    }
}
