<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_questions', function (Blueprint $table) {
            $table->id();
	    $table->foreignId('admission_form_id')->constrained()->onDelete('cascade');
            $table->string('question1')->nullable();
            $table->string('question2')->nullable();
            $table->string('question3')->nullable();
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
        Schema::dropIfExists('user_questions');
    }
}
