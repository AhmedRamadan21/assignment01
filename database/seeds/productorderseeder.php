<?php

use Illuminate\Database\Seeder;

class productorderseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\orderproduct::class,5)->create();
    }
}
