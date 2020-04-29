<?php

use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('venues')->insert([
            'name' => 'Butter',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Uncle Desi and Sons',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Go Corporate',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Soul Thai Food',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Ho Lee Fook',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Burger Circus',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Motorino (Soho)',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Maison Libanaise',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Chom Chom',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Taqueria Super Macho',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Hotal Colambo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'La Vache',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Stazione Novella',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Le Petit Saigon',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Artemis Apolo',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('venues')->insert([
            'name' => 'Motorino (Wan Chai)',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
