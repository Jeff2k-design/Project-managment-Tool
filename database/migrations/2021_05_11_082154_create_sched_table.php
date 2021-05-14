<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scheds', function (Blueprint $table) {
            $table->id();
            $table->string('GroupName');
            $table->string('Panelfirst');
            $table->string('Panelsecond');
            $table->string('Panelthird');
            $table->string('Date');
            $table->string('Venue');
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
        Schema::dropIfExists('scheds');
    }
}
