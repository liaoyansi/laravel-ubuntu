<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommerceProductTempsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_product_temp')){

        }else {
            Schema::create('commerce_product_temp', function (Blueprint $table) {
                $table->increments('id');
                // 商品名称
                $table->string('name')
                    ->comment('商品名称');
                // LOG id
                $table->integer('log')->default(0)->unsigned()
                    ->comment('log');
                // 原价
                $table->decimal('price', 10, 2)
                    ->comment('原价');
                // 现价
                $table->decimal('amount', 10, 2)
                    ->comment('现价');
                // 数量
                $table->integer('number')->default(0)->unsigned()
                    ->comment('库存');
                // 规格
                $table->string('spec')
                    ->comment('商品规格');
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
        Schema::dropIfExists('commerce_product_temps');
    }
}
