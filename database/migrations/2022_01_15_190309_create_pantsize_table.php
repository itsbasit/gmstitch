<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePantsizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pantsize', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('kamar')->nullable();
            $table->string('hip')->nullable();
            $table->string('length')->nullable();
            $table->string('body')->nullable();
            $table->string('thai')->nullable();
            $table->string('goda')->nullable();
            $table->string('mori')->nullable();
            $table->string('front_pocket')->nullable();
            $table->string('back_pocket')->nullable();
            $table->string('pancha')->nullable();
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
        Schema::dropIfExists('pantsize');
    }
}
