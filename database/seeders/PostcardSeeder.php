<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Postcard;

class PostcardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $postcards = [
            '5x7 Postcard',
            '3x8 Postcard'
        ];

         for($i = 0; $i<count($postcards);$i++){
            $postcard = new Postcard;
            $postcard->label = $postcards[$i];
            $postcard->price=2.99;
            $postcard->SKU=$faker->ean8();
            $postcard->save();
        }
    }
}
