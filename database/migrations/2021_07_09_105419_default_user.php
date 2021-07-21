<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_user', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('d_kullanici')->nullable();
            $table->string('d_option_1')->nullable();
            $table->string('d_option_2')->nullable();
            $table->string('d_option_3')->nullable();
            $table->string('d_option_4')->nullable();
            $table->string('d_note1')->nullable();
            $table->string('d_note2')->nullable();
            $table->string('d_note3')->nullable();
            $table->string('d_note4')->nullable();
            $table->timestamps();
        });    }

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
