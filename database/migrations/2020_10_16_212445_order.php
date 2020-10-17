<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Custmerid');
            $table->dateTime('OrderDate');
            $table->dateTime('RequireDate');
            $table->dateTime('ShippedDate');
            $table->integer('Status');
            $table->string('Comments');
            $table->timestamps();

            $table->foreign('Custmerid')->references('id')->on('Customers');
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
