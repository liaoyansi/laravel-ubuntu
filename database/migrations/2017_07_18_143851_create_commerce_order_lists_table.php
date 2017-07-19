<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommerceOrderListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_order_list')){

        }else {
            Schema::create('commerce_order_list', function (Blueprint $table) {
                $table->increments('id');
                // 订单编号
                $table->integer('order')->unsigned()
                    ->comment('订单编号');
                // 商品ID
                $table->integer('product_temp')->unsigned()
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
        Schema::dropIfExists('commerce_order_lists');
    }
}
