<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('DictionarySeeder');
        $this->call('CategorySeeder');
        $this->call('ProductSeeder');
        $this->call('YoutubeVideoSeeder');
        // $this->call([
        //     DictionarySeeder::class,
        //     UserSeeder::class,
        // ]);
    }
}
