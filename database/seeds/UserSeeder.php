<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'tommy rachmadiono',
            'email' => 'tommyrachmadiono@gmail.com',
            'password' => bcrypt('123456'),
            'alamat' => 'surabaya',
            'jenis_kelamin' => 'laki-laki',
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
        ]);
        DB::table('users')->insert([
            'name' => 'john doe',
            'email' => 'johndoe@gmail.com',
            'password' => bcrypt('123456'),
            'alamat' => 'malang',
            'jenis_kelamin' => 'laki-laki',
            'created_at' => date(now()),
            'updated_at' => date(now()),
        ]);
    }
}
