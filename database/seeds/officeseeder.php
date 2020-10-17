<?php

use Illuminate\Database\Seeder;

class officeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Office::class,5)->create();
    }
}
