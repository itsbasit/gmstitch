<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaistcoatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waistcoat', function (Blueprint $table) {
            $table->id();
            $table->integer('customerID')->nullable();
            $table->string('name')->nullable();
            $table->text('mobile')->nullable();
            $table->string('length')->nullable();
            $table->string('tira')->nullable();
            $table->string('gala')->nullable();
            $table->string('chati')->nullable();
            $table->string('pait')->nullable();
            $table->string('kamar')->nullable();
            $table->string('hip')->nullable();
            $table->string('gap')->nullable();
            $table->string('bain')->nullable();
            $table->string('gheri')->nullable();
            $table->string('design')->nullable();
            $table->string('karhai')->nullable();
            
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
        Schema::dropIfExists('waistcoat');
    }
}
