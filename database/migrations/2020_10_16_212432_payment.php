<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Payment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Payments', function (Blueprint $table) {
            $table->string('Checknum')->primary();
            $table->unsignedBigInteger('CustmerId');
            $table->dateTime('PaymentDate');
            $table->float('Amount',19,0);
            $table->timestamps();

            $table->foreign('CustmerId')->references('id')->on('Customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
