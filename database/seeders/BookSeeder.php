<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $fake  = Faker\Factory::create();
        // $limit = 10;

        // for ($i = 0; $i < $limit; $i++){
        //     DB::table('books')->insert([
        //         'name' => $fake->name,
        //         'author' => $fake->name,
        //         'ISBN' => $fake->numerify($string = '###'),
        //         'Publishing year' => date("Y-m-d H:i:s"),
        //         'page' => $fake->numerify($string = '###'),
        //         'category' => $fake->numberBetween($min = 1, $max = 2)
        //     ]);
        // }
    }
}
