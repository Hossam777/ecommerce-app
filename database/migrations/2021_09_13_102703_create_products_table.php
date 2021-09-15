<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->double('price');
            $table->double('sale');
            $table->string('sizes', 50);
            $table->string('colors');
            $table->string('description');
            $table->string('category', 30);
            $table->string('subcategory', 30);
            $table->timestamps();
        });
        DB::table('products')->insert(
            array(
                    'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/564x/c3/dc/38/c3dc38a87605e7d1b99a53bbc336e829.jpg',
                'image2' => 'https://i.pinimg.com/564x/c3/dc/38/c3dc38a87605e7d1b99a53bbc336e829.jpg',
                'image3' => 'https://i.pinimg.com/564x/c3/dc/38/c3dc38a87605e7d1b99a53bbc336e829.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(    
            array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/86/8a/05/868a051c9b452576e18514e5ef83060b.jpg',
                'image2' => 'https://i.pinimg.com/236x/86/8a/05/868a051c9b452576e18514e5ef83060b.jpg',
                'image3' => 'https://i.pinimg.com/236x/86/8a/05/868a051c9b452576e18514e5ef83060b.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/236x/d6/6a/33/d66a338b05d71ca13e1367aa1ac1bf74.jpg',
                'image2' => 'https://i.pinimg.com/236x/d6/6a/33/d66a338b05d71ca13e1367aa1ac1bf74.jpg',
                'image3' => 'https://i.pinimg.com/236x/d6/6a/33/d66a338b05d71ca13e1367aa1ac1bf74.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/7f/c6/6d/7fc66da657be0077579d890213ebfa64.jpg',
                'image2' => 'https://i.pinimg.com/236x/7f/c6/6d/7fc66da657be0077579d890213ebfa64.jpg',
                'image3' => 'https://i.pinimg.com/236x/7f/c6/6d/7fc66da657be0077579d890213ebfa64.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/236x/27/64/4e/27644ef05da7ddc009d5aa092b0d7d07.jpg',
                'image2' => 'https://i.pinimg.com/236x/27/64/4e/27644ef05da7ddc009d5aa092b0d7d07.jpg',
                'image3' => 'https://i.pinimg.com/236x/27/64/4e/27644ef05da7ddc009d5aa092b0d7d07.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/4d/5b/25/4d5b258b2ecaa34107e572c17e6c93b2.jpg',
                'image2' => 'https://i.pinimg.com/236x/4d/5b/25/4d5b258b2ecaa34107e572c17e6c93b2.jpg',
                'image3' => 'https://i.pinimg.com/236x/4d/5b/25/4d5b258b2ecaa34107e572c17e6c93b2.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/236x/67/b6/ae/67b6aee1578bd796ceaac975c3b69edd.jpg',
                'image2' => 'https://i.pinimg.com/236x/67/b6/ae/67b6aee1578bd796ceaac975c3b69edd.jpg',
                'image3' => 'https://i.pinimg.com/236x/67/b6/ae/67b6aee1578bd796ceaac975c3b69edd.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/7c/04/ae/7c04ae1553e916be646c12e8dc54b8eb.jpg',
                'image2' => 'https://i.pinimg.com/236x/7c/04/ae/7c04ae1553e916be646c12e8dc54b8eb.jpg',
                'image3' => 'https://i.pinimg.com/236x/7c/04/ae/7c04ae1553e916be646c12e8dc54b8eb.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/564x/c3/dc/38/c3dc38a87605e7d1b99a53bbc336e829.jpg',
                'image2' => 'https://i.pinimg.com/564x/c3/dc/38/c3dc38a87605e7d1b99a53bbc336e829.jpg',
                'image3' => 'https://i.pinimg.com/564x/c3/dc/38/c3dc38a87605e7d1b99a53bbc336e829.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/86/8a/05/868a051c9b452576e18514e5ef83060b.jpg',
                'image2' => 'https://i.pinimg.com/236x/86/8a/05/868a051c9b452576e18514e5ef83060b.jpg',
                'image3' => 'https://i.pinimg.com/236x/86/8a/05/868a051c9b452576e18514e5ef83060b.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/236x/d6/6a/33/d66a338b05d71ca13e1367aa1ac1bf74.jpg',
                'image2' => 'https://i.pinimg.com/236x/d6/6a/33/d66a338b05d71ca13e1367aa1ac1bf74.jpg',
                'image3' => 'https://i.pinimg.com/236x/d6/6a/33/d66a338b05d71ca13e1367aa1ac1bf74.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/7f/c6/6d/7fc66da657be0077579d890213ebfa64.jpg',
                'image2' => 'https://i.pinimg.com/236x/7f/c6/6d/7fc66da657be0077579d890213ebfa64.jpg',
                'image3' => 'https://i.pinimg.com/236x/7f/c6/6d/7fc66da657be0077579d890213ebfa64.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/236x/27/64/4e/27644ef05da7ddc009d5aa092b0d7d07.jpg',
                'image2' => 'https://i.pinimg.com/236x/27/64/4e/27644ef05da7ddc009d5aa092b0d7d07.jpg',
                'image3' => 'https://i.pinimg.com/236x/27/64/4e/27644ef05da7ddc009d5aa092b0d7d07.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/4d/5b/25/4d5b258b2ecaa34107e572c17e6c93b2.jpg',
                'image2' => 'https://i.pinimg.com/236x/4d/5b/25/4d5b258b2ecaa34107e572c17e6c93b2.jpg',
                'image3' => 'https://i.pinimg.com/236x/4d/5b/25/4d5b258b2ecaa34107e572c17e6c93b2.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
            array(
                'name' => 'Evening Dress',
                'image1' => 'https://i.pinimg.com/236x/67/b6/ae/67b6aee1578bd796ceaac975c3b69edd.jpg',
                'image2' => 'https://i.pinimg.com/236x/67/b6/ae/67b6aee1578bd796ceaac975c3b69edd.jpg',
                'image3' => 'https://i.pinimg.com/236x/67/b6/ae/67b6aee1578bd796ceaac975c3b69edd.jpg',
                'price' => 20.0,
                'sale' => 0,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
        DB::table('products')->insert(
                array(
                'name' => 'Sport Dress',
                'image1' => 'https://i.pinimg.com/236x/7c/04/ae/7c04ae1553e916be646c12e8dc54b8eb.jpg',
                'image2' => 'https://i.pinimg.com/236x/7c/04/ae/7c04ae1553e916be646c12e8dc54b8eb.jpg',
                'image3' => 'https://i.pinimg.com/236x/7c/04/ae/7c04ae1553e916be646c12e8dc54b8eb.jpg',
                'price' => 12.0,
                'sale' => 10,
                'sizes' => 'S;M;X;2X',
                'colors' => 'red:#FF0000;green:#00FF00;blue:#0000FF;orange:#FFFF00;white:#FFFFFF;',
                'description' => 'Perfect autumn wool coat, created by Italian brand Woolissima, will make you feel warm and look chic.',
                'category' => 'DRESSES',
                'subcategory' => 'Long'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
