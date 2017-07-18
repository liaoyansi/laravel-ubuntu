<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 收藏
 * Class CreateCommerceCollectTable
 */
class CreateCommerceCollectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_collect')){

        }else {
            Schema::create('commerce_collect', function (Blueprint $table) {
                $table->increments('id');
                // 用户
                $table->integer('user')->unsigned()
                    ->comment('用户ID');
                // 商品ID
                $table->integer('product')->unsigned()
                    ->comment('商品ID');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commerce_collect');
    }
}
