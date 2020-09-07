<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'G-Shock DW-6900',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 1,
            'image' => "dw6900.jpg",
        ]);

        DB::table('products')->insert([
            'name' => 'G-Shock GA-2100',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 1,
            'image' => "ga2100.jpg",
        ]);

        DB::table('products')->insert([
            'name' => 'Seiko X',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 2,
            'image' => "seiko1.jpg",
        ]);
        DB::table('products')->insert([
            'name' => 'Seiko ABC',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 2,
            'image' => "seiko2.jpg",
        ]);
        DB::table('products')->insert([
            'name' => 'Alba N',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 3,
            'image' => "alba1.jpg",
        ]);
        DB::table('products')->insert([
            'name' => 'Alba 2.0',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 3,
            'image' => "ga2100.jpg",
        ]);
        DB::table('products')->insert([
            'name' => 'Casio C',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 4,
            'image' => "casio1.jpg",
        ]);
        DB::table('products')->insert([
            'name' => 'Casio NEW',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 4,
            'image' => "casio2.jpg",
        ]);
        DB::table('products')->insert([
            'name' => 'Expedition PRO',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 5,
            'image' => "expedition1.jpg",
        ]);
        DB::table('products')->insert([
            'name' => 'Expediotion O',
            'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, explicabo?",
            'quantity' => 5,
            'category_id' => 5,
            'image' => "expedition2.jpg",
        ]);

    }
}
