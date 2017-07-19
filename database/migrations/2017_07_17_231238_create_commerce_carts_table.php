<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 购物车
 * Class CreateCommerceCartsTable
 */
class CreateCommerceCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('commerce_carts', function (Blueprint $table) {
            $table->increments('id');
            // 用户
            $table->integer('user')->unsigned()
                ->comment('用户ID');
            // 商品ID
            $table->integer('product_temp')->unsigned()
                ->comment('商品ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerce_carts');
    }
}
