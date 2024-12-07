<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrandParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grand_parents', function (Blueprint $table) {
            $table->id();
	    $table->foreignId('admission_form_id')->constrained()->onDelete('cascade');
            $table->boolean('reside_with_child')->default(false);
            $table->json('occupation')->nullable();
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
        Schema::dropIfExists('grand_parents');
    }
}
