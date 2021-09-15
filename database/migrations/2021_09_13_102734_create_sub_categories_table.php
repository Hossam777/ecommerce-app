<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('categoryid');
            $table->string('name', 30);
            $table->timestamps();
        });
        DB::table('sub_categories')->insert(
            array(
                'categoryid' => '1',
                'name' => 'ALL',
            )
        );
        DB::table('sub_categories')->insert(
            array(
                'categoryid' => '1',
                'name' => 'Backpacks',
            )
        );
        DB::table('sub_categories')->insert(
            array(
                'categoryid' => '1',
                'name' => 'Shoulder Bags',
            )
        );
        DB::table('sub_categories')->insert(
            array(
                'categoryid' => '1',
                'name' => 'T-shirts',
            )
        );
        DB::table('sub_categories')->insert(
            array(
                'categoryid' => '1',
                'name' => 'Crop tops',
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
        Schema::dropIfExists('sub_categories');
    }
}
