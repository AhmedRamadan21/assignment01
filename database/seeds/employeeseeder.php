<?php

use Illuminate\Database\Seeder;

class employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\employee::class,5)->create();
    }
}
