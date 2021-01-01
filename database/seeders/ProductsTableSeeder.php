<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fake = Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            Product::create([
                'title'=>$fake->sentence(8),
                'slug'=>$fake->slug,
                'subtitle'=>$fake->sentence(5),
                'description'=>$fake->text,
                'price'=>$fake->numberBetween(15,300)* 100,
                'image'=>'https://via.placeholder.com/200x250',
            ]);
        }
    }
}
