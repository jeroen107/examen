<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * hier word de tabel customers gevuld
     */

    public function run()
    {
        factory(App\Customer::class, 10)->create();
    }
}
