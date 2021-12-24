<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nickname', 20)->comment('氏名');
            $table->string('email', 255)->unique()->comment('メールアドレス');
            $table->timestamp('email_verified_at')->nullable()->comment('認証日');
            $table->string('password')->comment('パスワード');
            $table->date('date_of_birth')->comment('生年月日');
            $table->string('post_code')->comment('性別');
            $table->string('gender')->comment('郵便番号');
            $table->string('phone',20)->comment('電話番号');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
