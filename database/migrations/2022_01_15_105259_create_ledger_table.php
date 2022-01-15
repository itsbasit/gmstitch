<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLedgerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ledger', function (Blueprint $table) {
            $table->id();
            $table->string('purpose1');
            $table->string('purpose2');
            $table->string('purpose3')->nullable()->default('NULL');
            $table->string('purpose4')->nullable()->default('NULL');
            $table->string('purpose5')->nullable()->default('NULL');
            $table->string('debit');
            $table->string('credit');
            $table->string('savings');
            $table->string('date');
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
        Schema::dropIfExists('ledger');
    }
}
