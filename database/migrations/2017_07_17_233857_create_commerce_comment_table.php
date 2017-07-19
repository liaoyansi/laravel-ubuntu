<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * 评论
 * Class CreateCommerceCommentTable
 */
class CreateCommerceCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('commerce_comment')){

        }else {
            Schema::create('commerce_comment', function (Blueprint $table) {
                $table->increments('id');
                // 用户
                // 商品ID
                // 标题
                // 内容
                // 图片
                // 评分
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
        Schema::dropIfExists('commerce_comment');
    }
}
