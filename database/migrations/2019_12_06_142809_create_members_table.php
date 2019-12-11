<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',100)->nullable()->comment('姓名');
            $table->string('mobile',30)->nullable(false)->comment('手机号')->index();
            $table->string('wechat',100)->nullable()->comment('微信号')->index();
            $table->integer('integral')->default(0)->comment('积分');
            $table->tinyInteger('gender')->nullable(false)->default(0)->comment('1 男 2女 3 未知');
            $table->string('car_no',255)->nullable()->comment('车辆号码')->index();
            $table->string('describe',255)->nullable()->comment('描述');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
