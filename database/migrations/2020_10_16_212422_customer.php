<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('salesrepemployeenum');
            $table->string('Name');
            $table->string('LastName');
            $table->string('FirsName');
            $table->string('Phone');
            $table->string('Address1');
            $table->string('Address2');
            $table->string('City');
            $table->string('State');
            $table->integer('PostalCode');
            $table->float('CreditLimit',19,0);
            $table->timestamps();

            $table->foreign('salesrepemployeenum')->references('id')->on('Employees');

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
