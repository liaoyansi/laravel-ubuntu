<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('admin_users')) {
            Schema::table('admin_users', function (Blueprint $table) {

            });
        }else {
            Schema::create('admin_users', function (Blueprint $table) {
                $table->increments('id');
                // 用户名
                $table->string('username')->unique();
                // 昵称
                $table->string('nickname')->nullable();
                // 邮箱
                $table->string('email')->nullable();
                // 手机号
                $table->string('phone')->nullable();
                // 类型
                $table->integer('type')->nullable();
                // 密码
                $table->string('password');
                $table->rememberToken();
                // 创建时间
                $table->integer('created_at')->default(0);
                // 更新时间
                $table->integer('updated_at')->default(0);
                // 登录时间
                $table->integer('login_time')->default(0);
                // 登录IP
                $table->ipAddress('login_ip')->nullable();
                // 上一次登录时间
                $table->integer('last_login_time')->default(0);
                // 上一次登录IP
                $table->ipAddress('last_login_ip')->nullable();
                // 判断用户是否有效
                $table->integer('active')->default(0);

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
        Schema::dropIfExists('admin_users');
    }
}
