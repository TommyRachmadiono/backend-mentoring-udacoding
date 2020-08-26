<?php

use Illuminate\Database\Seeder;

class DictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'SAYA',
            'english_word' => "Me | I am | I'm",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'KAMU',
            'english_word' => "You | Him | Her",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'KITA',
            'english_word' => "We | Us | We're",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'JALAN KAKI',
            'english_word' => "Walk | Strolling | Walking",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'MENYETIR',
            'english_word' => "Drive | Driving | Drove",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'MAKAN',
            'english_word' => "Eat | Eating | Consume",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'MENGANTUK',
            'english_word' => "Sleepy | Tired | Doze Off",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'PERGI',
            'english_word' => "Go | Went | Away",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'PULANG',
            'english_word' => "Come Back | Back | Come Back Home",
        ]);
        DB::table('dictionaries')->insert([
            'indonesia_word' => 'BERMAIN',
            'english_word' => "Me | I am | I'm",
        ]);
    }
}
