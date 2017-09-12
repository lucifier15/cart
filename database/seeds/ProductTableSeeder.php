<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product =new \App\product([
         'imagePath'=>'http://hdelhi.s3.amazonaws.com/catalog/product/cache/1/image/800x/602f0fa2c1f0d1ba5e241f914e856ff9/M/a/Mango_Pickle.jpg',
         'title'=>'Mango(500gm)',
         'description'=>'Homemade',
         'price'=>150
        	]);
        $product->save();

        $product =new \App\product([
         'imagePath'=>'http://hdelhi.s3.amazonaws.com/catalog/product/cache/1/image/800x/602f0fa2c1f0d1ba5e241f914e856ff9/M/a/Mango_Pickle.jpg',
         'title'=>'Mango(1Kg)',
         'description'=>'Homemade',
         'price'=>160
        	]);
        $product->save();

        $product =new \App\product([
         'imagePath'=>'http://hdelhi.s3.amazonaws.com/catalog/product/cache/1/image/800x/602f0fa2c1f0d1ba5e241f914e856ff9/M/a/Mango_Pickle.jpg',
         'title'=>'Garlic(500gm)',
         'description'=>'Homemade',
         'price'=>170
        	]);
        $product->save();

    }
}
