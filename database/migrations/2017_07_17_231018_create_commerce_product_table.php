<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 商品
 * Class CreateCommerceProductTable
 */
class CreateCommerceProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_product')){

        }else{
            Schema::create('commerce_product', function (Blueprint $table) {
                $table->increments('id')
                    ->comment('唯一ID');
                // 商品名称
                $table->string('name')
                    ->comment('商品名称');
                // LOG id
                $table->integer('log')->default(0)->unsigned()
                    ->comment('log');
                // 分类
                $table->integer('classify')->default(0)->unsigned()
                    ->comment('分类ID');
                // 原价
                $table->decimal('price',10,2)
                    ->comment('原价');
                // 现价
                $table->decimal('amount',10,2)
                    ->comment('现价');
                // 数量
                $table->integer('number')->default(0)->unsigned()
                    ->comment('库存');
                // 销量
                $table->integer('sales_volume')->default(0)->unsigned()
                    ->comment('销量');
                // 快递费
                $table->decimal('freight',10,2)
                    ->comment('快递费');
                // banner
                $table->string('banner')
                    ->comment('商品Banner');
                // 详情
                $table->longText('detail')
                    ->comment('商品详情');
                // 规格
                $table->string('spec')
                    ->comment('商品规格');
                // 是否可用优惠券
                $table->integer('use_coupon')->default(0)->unsigned()
                    ->comment('是否可用优惠券：0：不可用 1：可用');
                // 状态
                $table->integer('state')->default(0)->unsigned()
                    ->comment('商品状态：0：下架 1：上架');
                // 是否有效
                $table->integer('valid')->default(0)->unsigned()
                    ->comment('是否有效：0：失效 1：有效');
                // 是否有效
                $table->integer('valid_time')->default(0)->unsigned()
                    ->comment('有效日期，0：永久，大于0有效时间');

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
        Schema::dropIfExists('commerce_product');
    }
}
