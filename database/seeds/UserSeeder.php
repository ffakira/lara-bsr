<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->insert([
           'name' => 'Akira',
           'email' => 'akiraff@hotmail.com',
           'password' => bcrypt('password'),
           'created_at' => now(),
           'updated_at' => now()
        ]);
    }
}
