<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'G-Shock',
            'image' => "gshock.jpg",
        ]);
        DB::table('categories')->insert([
            'name' => 'Seiko',
            'image' => "seiko.jpg",
        ]);
        DB::table('categories')->insert([
            'name' => 'Alba',
            'image' => "alba.jpg",
        ]);
        DB::table('categories')->insert([
            'name' => 'Casio',
            'image' => "casio.jpg",
        ]);
        DB::table('categories')->insert([
            'name' => 'Expedition',
            'image' => "expedition.jpg",
        ]);
    }
}
