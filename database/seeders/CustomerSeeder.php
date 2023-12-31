<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::factory()
        ->count(25)
        ->hasInvoices(10)
        ->create();

        Customer::factory()
        ->count(10)
        ->hasInvoices(4)
        ->create();

        Customer::factory()
        ->count(15)
        ->hasInvoices(7)
        ->create();

        Customer::factory()
        ->count(5)
        ->create();
    }
}
