<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            [
                'name' => "Surfesjcb",
                'price' => '30000',
                'description' => 'a good surface mining product',
                'category' => 'Surface mining',
                'galary' => 'surfaceimage_1.jpg'

            ],
            [

                'name' => "jcb2",
                'price' => '15000',
                'description' => 'a good mining product',
                'category' => 'underground mining',
                'galary' => 'image_2.jpg'

            ],
            [

                'name' => "jcb3",
                'price' => '20000',
                'description' => 'a good mining product',
                'category' => 'underground mining',
                'galary' => 'image_3.jpg'


            ]
        ]);
    }
}
