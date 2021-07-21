<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Beverages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        Schema::create('members', function (Blueprint $table) {
        $table->id();
        $table->string('kullanici')->nullable();
        $table->string('option_1')->nullable();
        $table->string('option_2')->nullable();
        $table->string('option_3')->nullable();
        $table->string('option_4')->nullable();
        $table->string('count')->nullable();
        $table->string('location')->nullable();
        $table->string('note')->nullable();
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
        Schema::dropIfExists('beverages');
    }
}
