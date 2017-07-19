<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 订单
 * Class CreateCommerceOrdersTable
 */
class CreateCommerceOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('commerce_orders')) {
            // 更新字段
            Schema::table('commerce_orders', function (Blueprint $table) {

            });
            // 判断字段是否存在
//            if (Schema::hasColumn('users', 'email')) {
//            }
        }else {
            Schema::create('commerce_orders', function (Blueprint $table) {
                //唯一ID
                $table->increments('id')->unsigned()
                    ->comment('唯一编号');
                // 订单编号
                $table->string('number')
                    ->comment('订单编号');
                // 用户
                $table->integer('user')->unsigned()
                    ->comment('用户ID');
                // 订单状态
                $table->integer('state')->default(0)->unsigned()
                    ->comment('订单状态，0:新建 1：待付款 2：待发货 3：待收货 4：待评价');
                // 收货地址
                $table->integer('address')->unsigned()
                    ->comment('收货地址ID');
                //商品总价
                $table->decimal('total',10,2)->default(0)
                    ->comment('商品总价');
                //运费
                $table->decimal('freight',10,2)->default(0)
                    ->comment('运费');
                //优惠金额
                $table->decimal('discount',10,2)->default(0)
                    ->comment('优惠金额');
                //实付金额
                $table->decimal('amount',10,2)->default(0)
                    ->comment('实付金额');
                // 创建时间
                $table->integer('created_at')->default(0)->unsigned()
                    ->comment('创建时间');
                // 付款时间
                $table->integer('payment_at')->default(0)->unsigned()
                    ->comment('付款时间');
                // 发货时间
                $table->integer('delivery_at')->default(0)->unsigned()
                    ->comment('发货时间');
                // 成交时间
                $table->integer('complete_at')->default(0)->unsigned()
                    ->comment('成交时间');
                // 优惠券ID
                $table->integer('coupon')->default(0)->unsigned()
                    ->comment('优惠券ID');
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
        Schema::dropIfExists('commerce_orders');
    }
}
