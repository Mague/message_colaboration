<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table("users")->truncate();
        factory(App\User::class, 49)->create();
        factory(App\User::class)->create([
            "name"=>"mague",
            "email"=>"enmanueldavidmolina@gmail.com",
            "password"=>"emnmanuel2013",
            "role"=>"admin"
        ]);
    }
}
