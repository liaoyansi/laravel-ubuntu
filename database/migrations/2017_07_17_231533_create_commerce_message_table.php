<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 消息
 * Class CreateCommerceMessageTable
 */
class CreateCommerceMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_message')){

        }else {
            Schema::create('commerce_message', function (Blueprint $table) {
                $table->increments('id');
                // 用户
                $table->integer('user')->unsigned()
                    ->comment('用户ID');
                // 是否阅读
                $table->integer('read')
                    ->comment('是否阅读，0未阅读，1阅读');
                // 标题
                $table->string('title')
                    ->comment('标题');
                // 内容
                $table->string('content')
                    ->comment('内容');
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
        Schema::dropIfExists('commerce_message');
    }
}
