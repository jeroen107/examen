<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    /**
     * hier runt hij de seeders zodat de tabellen gevuld worden
     */

    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(PetsTableSeeder::class);
    }
}
