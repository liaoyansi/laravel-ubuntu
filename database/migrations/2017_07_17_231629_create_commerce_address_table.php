<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 地址
 * Class CreateCommerceAddressTable
 */
class CreateCommerceAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_address')){

        }else {
            Schema::create('commerce_address', function (Blueprint $table) {
                $table->increments('id');
                // 用户
                $table->integer('user')->unsigned()
                    ->comment('用户ID');
                // 省份
                $table->integer('province')->unsigned()
                    ->comment('省份');
                // 市
                $table->integer('city')->unsigned()
                    ->comment('城市');
                // 区
                $table->integer('area')->unsigned()
                    ->comment('区');
                // 街道
                $table->integer('street')->unsigned()
                    ->comment('街道');
                // 详细地址
                $table->string('detail')
                    ->comment('手机号');
                // 完整地址
                $table->string('address')
                    ->comment('手机号');
                // 手机号
                $table->string('mobile')
                    ->comment('手机号');
                // 收货人
                $table->string('realname')
                    ->comment('收货人');
                // 是否默认
                $table->integer('main')->default(0)->unsigned()
                    ->comment('是否默认，0否，1是');
                // 坐标值
                $table->string('coordinate')->nullable()
                    ->comment('坐标');
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
        Schema::dropIfExists('commerce_address');
    }
}
