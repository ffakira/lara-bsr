<?php

use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('drivers')->insert([
           'name' => 'Jamar Blair'
        ]);

        DB::table('drivers')->insert([
            'name' => 'Cornelius Baker'
        ]);

        DB::table('drivers')->insert([
           'name' => 'Dante Park'
        ]);

        DB::table('drivers')->insert([
           'name' => 'Mary Nunez'
        ]);

        DB::table('drivers')->insert([
           'name' => 'Dominique Golden'
        ]);
    }
}
