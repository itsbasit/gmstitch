<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('no_of_suit')->nullable()->default('NULL');
            $table->string('suit_type')->nullable()->default('NULL');
            $table->string('delivered')->nullable()->default('NULL');
            $table->string('rack',22)->nullable()->default('NULL');
            $table->string('total_price')->nullable()->default('NULL');
            $table->string('paid_price')->nullable()->default('NULL');
            $table->string('booking_date')->nullable()->default('NULL');
            $table->string('delivery_date')->nullable()->default('NULL');
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
        Schema::dropIfExists('orders');
    }
}
