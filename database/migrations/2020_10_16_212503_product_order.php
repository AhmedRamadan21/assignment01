<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductOrders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Orderid');
            $table->unsignedBigInteger('Productcode');
            $table->integer('Qty');
            $table->float('PriceEach',19,0);
            $table->timestamps();

            $table->foreign('Orderid')->references('id')->on('Orders');
            $table->foreign('Productcode')->references('Code')->on('Products');
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
