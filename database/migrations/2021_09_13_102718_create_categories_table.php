<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 30);
            $table->timestamps();
        });
        DB::table('categories')->insert(
            array(
                'name' => 'NEW IN',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'TOPS',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'SKIRTS & TROUSERS',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'DRESSES',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'OUTERWEAR',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'SHOES',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'BAGS',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'ACCESSORIES',
            )
        );
        DB::table('categories')->insert(
            array(
                'name' => 'SALE %',
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
        Schema::dropIfExists('categories');
    }
}
