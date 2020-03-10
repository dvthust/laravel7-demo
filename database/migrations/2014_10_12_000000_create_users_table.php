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
            $table->string('name');
            $table->string('username', 50)->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('nickname')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('phone', 50)->unique()->nullable();
            $table->timestamp('phone_verified_at')->nullable();
            $table->string('address')->nullable();
            $table->text('about')->nullable();
            $table->string('avatar')->nullable();
            $table->string('token')->nullable();
            $table->string('firebase_token')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->timestamp('last_login')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->timestamp('last_visit')->nullable();
            $table->json('settings')->nullable();
            $table->rememberToken();
            $table->softDeletes();
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
