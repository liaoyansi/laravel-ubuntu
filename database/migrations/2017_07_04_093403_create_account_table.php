<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasTable('account')) {
            Schema::table('account', function (Blueprint $table) {
            });
        }else {
            Schema::create('account', function (Blueprint $table) {
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->uuid('uuid');
                $table->string('username')->comment('用户名');
                $table->string('password')->comment('密码');
                $table->string('email')->comment('邮箱');
                $table->string('phone')->comment('手机号');
                $table->string('nick_name')->comment('昵称');
                $table->ipAddress('login_ip')->nullable()->comment('登录IP');
                $table->timestamp('login_time')->nullable()->comment('登录时间');
                $table->ipAddress('last_login_ip')->nullable()->comment('最后一次登录IP');
                $table->timestamp('last_login_time')->nullable()->comment('最后一次登录时间');
                $table->timestamps();
                //$table->primary('id');
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
        Schema::dropIfExists('account');
    }
}
