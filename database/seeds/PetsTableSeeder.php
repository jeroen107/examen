<?php

use Illuminate\Database\Seeder;

class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * hier word de tabel pet gevuld
     */

    public function run()
    {
        factory(App\Pet::class, 10)->create();
    }
}
