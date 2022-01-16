<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeerecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeerecord', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id')->nullable()->default('NULL');
            $table->string('date')->nullable()->default('NULL');
            $table->string('no_of_suit_stitch')->nullable()->default('NULL');
            $table->string('customer_id')->nullable()->default('NULL');
            $table->string('suit_type')->nullable()->default('NULL');
            $table->string('paid')->nullable()->default('NULL');
            $table->string('advance')->nullable()->default('NULL');
            $table->string('remaining',20)->nullable()->default('NULL');
            $table->string('total_price')->nullable()->default('NULL');
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
        Schema::dropIfExists('employeerecord');
    }
}
