<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * hier maak ik een specafieke user aan zodat je de inloggegevens weet
     */

    public function run()
    {
        $u = new App\User();

        $u->name = "jeroen";
        $u->email = "jeroenlans107@gmail.com";
        $u->password = bcrypt("jeroen");

        $u->save();
    }
}
