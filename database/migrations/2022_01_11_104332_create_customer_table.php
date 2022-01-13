<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {

            $table->integer('id',20);
            $table->string('name');
            $table->string('mobile')->nullable()->default('NULL');
            $table->string('email')->nullable()->default('NULL');
            $table->string('type1')->nullable()->default('NULL');
            $table->string('type2')->nullable()->default('NULL');
            $table->string('type3')->nullable()->default('NULL');
            $table->string('currentdate')->nullable()->default('NULL');
            $table->string('returndate')->nullable()->default('NULL');
            $table->string('stitcher')->nullable()->default('NULL');
            $table->string('discount',20)->nullable()->default('NULL');
            $table->string('total_price')->nullable()->default('NULL');
            $table->string('lambai')->nullable()->default('NULL');
            $table->string('calar')->nullable()->default('NULL');
            $table->string('tira')->nullable()->default('NULL');
            $table->string('bain')->nullable()->default('NULL');
            $table->string('astin')->nullable()->default('NULL');
            $table->string('cuff')->nullable()->default('NULL');
            $table->string('colar')->nullable()->default('NULL');
            $table->string('patti')->nullable()->default('NULL');
            $table->string('chatti')->nullable()->default('NULL');
            $table->string('gheri')->nullable()->default('NULL');
            $table->string('design')->nullable()->default('NULL');
            $table->string('pait')->nullable()->default('NULL');
            $table->string('silai')->nullable()->default('NULL');
            $table->string('pocket')->nullable()->default('NULL');
            $table->string('pocketfront')->nullable()->default('NULL');
            $table->string('kamar')->nullable()->default('NULL');
            $table->string('hip')->nullable()->default('NULL');
            $table->string('cuffsize')->nullable()->default('NULL');
            $table->string('moda')->nullable()->default('NULL');
            $table->string('karhai')->nullable()->default('NULL');
            $table->string('cutter')->nullable()->default('NULL');
            $table->string('shalwarlength')->nullable()->default('NULL');
            $table->string('shalwarpocket')->nullable()->default('NULL');
            $table->string('shalwarghera')->nullable()->default('NULL');
            $table->string('downshoulder',20)->nullable()->default('NULL');
            $table->string('konisize')->nullable()->default('NULL');
            $table->string('poncha')->nullable()->default('NULL');
            $table->string('tayar1',25)->nullable()->default('NULL');
            $table->string('tayar2',25)->nullable()->default('NULL');
            $table->string('tayar3',25)->nullable()->default('NULL');
            $table->string('tayar4',25)->nullable()->default('NULL');
            // $table->string('poncha2',20)->nullable()->default('NULL');
            $table->string('rack')->nullable()->default('NULL');
            $table->string('enteredby')->nullable()->default('NULL');
            $table->string('advance')->nullable()->default('NULL');
            $table->timestamp('created_at')->default('current_timestamp');
            $table->timestamp('updated_at')->default('current_timestamp');
    
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}