<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 购物车
 * Class CreateCommerceMoneyLogTable
 */
class CreateCommerceMoneyLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_money_log')){

        }else {
            Schema::create('commerce_money_log', function (Blueprint $table) {
                $table->increments('id');
                // 用户
                $table->integer('user')->unsigned()
                    ->comment('用户ID');
                // 流向
                $table->integer('flow')->unsigned()
                    ->comment('流向，1：流入，2：流出');
                //金额
                $table->decimal('amount',10,2)->default(0)
                    ->comment('金额');
                $table->decimal('balance',10,2)->default(0)
                    ->comment('余额');
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
        Schema::dropIfExists('commerce_money_log');
    }
}
