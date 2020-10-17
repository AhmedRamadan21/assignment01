<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
            $this->call(produtlineseeder::class);
            $this->call(produtseeder::class);
            $this->call(officeseeder::class);
            $this->call(employeeseeder::class);
            $this->call(customerseeder::class);
            $this->call(paymentseeder::class);
            $this->call(orderseeder::class);
            $this->call(productorderseeder::class);
    }
}
