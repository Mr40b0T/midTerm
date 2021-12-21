<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            'id' => 1,
            'category' => "სენდვიჩები",
            'title' => "ორმაგი ბიგ მაკი",
            'price' => 25,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 3
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'category' => "სენდვიჩები",
            'title' => "ბიგ მაკი ბეკონით",
            'price' => 15,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 1
        ]);


        DB::table('products')->insert([
            'id' => 4,
            'category' => "სენდვიჩები",
            'title' => "ვეჯი როლი",
            'price' => 30,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 2
        ]);





        DB::table('products')->insert([
            'id' => 5,
            'category' => "დესერტები",
            'title' => "ბანანის მაფინი",
            'price' => 8,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 0,
            'number_on_main' => 0
        ]);
        
        DB::table('products')->insert([
            'id' => 6,
            'category' => "დესერტები",
            'title' => "მოცხარის მაფინი",
            'price' => 10,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 1
        ]);


        DB::table('products')->insert([
            'id' => 7,
            'category' => "დესერტები",
            'title' => "შოკოლადის მაფინი",
            'price' => 5,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 2
        ]);



        DB::table('products')->insert([
            'id' => 8,
            'category' => "სოუსები",
            'title' => "ტკბილ-ცხარე სოუსი",
            'price' => 5,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 3
        ]);
        
        DB::table('products')->insert([
            'id' => 9,
            'category' => "სოუსები",
            'title' => "ბარბიქიუ სოუსი",
            'price' => 5,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 1
        ]);


        DB::table('products')->insert([
            'id' => 10,
            'category' => "სოუსები",
            'title' => "მდოგვი",
            'price' => 3,
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
            'show_on_main' => 1,
            'number_on_main' => 2
        ]);


    }
}
