<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title' );
            $table->string('slug' )->unique()->nullable();
            $table->text('image')->nullable();
            $table->text('short_des')->nullable();
            $table->mediumText('content')->nullable();
            $table->double('rating')->nullable();
            $table->tinyInteger('hot')->default(0);
            $table->tinyInteger('order')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('active')->default(0);
            $table->integer('view_count')->default(0);
            $table->integer('vote_count')->nullable();
            $table->integer('like_count')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
