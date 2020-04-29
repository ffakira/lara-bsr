<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // Creates all the venues
        $this->call(VenueSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(DriverSeeder::class);
    }
}
