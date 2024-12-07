<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_forms', function (Blueprint $table) {
            $table->id();
  	    $table->string('child_name');
            $table->date('date_of_birth');
            $table->string('admission_seeking_class')->nullable();
            $table->enum('gender', ['boy', 'girl']);
            $table->string('previous_school')->nullable();
            // Siblings details
            $table->string('sibling_name')->nullable();
            $table->enum('sibling_relation', ['brother', 'sister'])->nullable();
            $table->integer('sibling_age')->nullable();
            $table->string('sibling_school')->nullable();
	    // Father's details
            $table->string('father_name');
            $table->string('father_qualifications')->nullable();
            $table->string('father_mobile');
            $table->string('father_occupation')->nullable();
            $table->string('father_designation')->nullable();
            $table->decimal('father_annual_income', 10, 2)->nullable();

            // Mother's details
            $table->string('mother_name');
            $table->string('mother_qualifications')->nullable();
            $table->string('mother_mobile');
            $table->string('mother_occupation')->nullable();
            $table->string('mother_designation')->nullable();
            $table->decimal('mother_annual_income', 10, 2)->nullable();
	    // Address
            $table->text('address');
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
        Schema::dropIfExists('admission_forms');
    }
}
