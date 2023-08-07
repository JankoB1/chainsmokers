<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applies', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_date');
            $table->string('ig')->nullable();
            $table->string('tt')->nullable();
            $table->string('web')->nullable();
            $table->string('other')->nullable();
            $table->string('education');
            $table->string('college')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('email');
            $table->string('why');
            $table->string('goals')->nullable();
            $table->string('impacts')->nullable();
            $table->string('about')->nullable();
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
        Schema::dropIfExists('applies');
    }
}
