<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        DB::table("users")->insert([
            "name"     => "Enrique Rodriguez",
            "email"    => "enriq_1997@hotmail.com",
            "password" => bcrypt("123456"),
        ]);
    }
}
