<?php

namespace Customers\database\seeders;

use Customers\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(['name'=>'tahaaa']);

    }
}
