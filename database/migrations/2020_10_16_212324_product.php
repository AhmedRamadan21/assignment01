<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {

            $table->id('Code');
            $table->unsignedBigInteger('Productlineid');
            $table->string('name');
            $table->integer('Scale');
            $table->string('vendor');
            $table->string('Description');
            $table->integer('qtylnstock');
            $table->float('buyprice',19,0);
            $table->string('msrp');
            $table->timestamps();


            $table->foreign('Productlineid')->references('id')->on('Productlines');
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
