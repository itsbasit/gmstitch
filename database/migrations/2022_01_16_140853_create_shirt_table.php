<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShirtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shirt', function (Blueprint $table) {
            $table->id();
            $table->integer('customerID');
            $table->string('name');
            $table->string('mobile')->nullable()->default('NULL');
            $table->string('email')->nullable()->default('NULL');
            $table->text('type1')->nullable()->default('NULL');
            $table->string('type2')->nullable()->default('NULL');
            $table->string('type3')->nullable()->default('NULL');
            $table->string('stitcher')->nullable()->default('NULL');
            $table->string('total_price')->nullable()->default('NULL');
            $table->string('lambai')->nullable()->default('NULL');
            $table->string('calar')->nullable()->default('NULL');
            $table->string('tira')->nullable()->default('NULL');
            $table->string('bazu')->nullable()->default('NULL');
            $table->string('gala')->nullable()->default('NULL');
            $table->string('bain')->nullable()->default('NULL');
            $table->string('astin')->nullable()->default('NULL');
            $table->string('cuff')->nullable()->default('NULL');
            $table->string('cuff2')->nullable()->default('NULL');
            $table->string('colar')->nullable()->default('NULL');
            $table->string('patti')->nullable()->default('NULL');
            $table->string('chatti')->nullable()->default('NULL');
            $table->string('gheri')->nullable()->default('NULL');
            $table->string('design')->nullable()->default('NULL');
            $table->string('pait')->nullable()->default('NULL');
            $table->string('silai')->nullable()->default('NULL');
            $table->string('side_pocket')->nullable()->default('NULL');
            $table->string('front_pocket',200);
            $table->string('front_pocket_design')->nullable()->default('NULL');
            $table->string('kamar')->nullable()->default('NULL');
            $table->string('hip')->nullable()->default('NULL');
            $table->string('cuffsize')->nullable()->default('NULL');
            $table->string('moda')->nullable()->default('NULL');
            $table->string('karhai')->nullable()->default('NULL');
            $table->string('cutter')->nullable()->default('NULL');
            
            $table->string('downshoulder',20)->nullable()->default('NULL');
            $table->string('side_chaak')->nullable()->default('NULL');
            $table->string('front_patti')->nullable()->default('NULL');
            $table->string('front_patti_design')->nullable()->default('NULL');
            $table->string('konisize')->nullable()->default('NULL');
            $table->string('tayar1',25)->nullable()->default('NULL');
            $table->string('tayar2',25)->nullable()->default('NULL');
            $table->string('tayar3',25)->nullable()->default('NULL');
            $table->string('enteredby')->nullable()->default('NULL');
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
        Schema::dropIfExists('shirt');
    }
}
