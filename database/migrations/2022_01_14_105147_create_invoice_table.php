<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
        $table->id();
		$table->integer('customerID')->nullable();
		$table->string('name')->nullable();
		$table->date('bookingDate')->nullable();
		$table->date('deliveryDate')->nullable();
		$table->string('rack')->nullable();
		$table->string('advance')->nullable();
		$table->string('discount')->nullable();
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
        Schema::dropIfExists('invoice');
    }
}