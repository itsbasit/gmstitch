<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coat', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->integer('customerID')->nullable();
            $table->string('name')->nullable();
            $table->text('mobile')->nullable();
            $table->string('length')->nullable();
            $table->string('tira')->nullable();
            $table->string('bazu')->nullable();
            $table->string('gala')->nullable();
            $table->string('chati')->nullable();
            $table->string('gap')->nullable();
            $table->string('kamar')->nullable();
            $table->string('hip')->nullable();
            $table->string('half_back')->nullable();
            $table->string('cros_back')->nullable();
            $table->string('dola')->nullable();
            $table->string('side_chaak')->nullable();
            $table->string('napail_size')->nullable();
            $table->string('gheri')->nullable();
            $table->string('style')->nullable();
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
        Schema::dropIfExists('coat');
    }
}
