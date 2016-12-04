<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('company_id');
            $table->string('title');
            $table->text('body');
            $table->string('image');
            $table->integer('view')->default(0);
            $table->string('slug');
            $table->string('lang');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->boolean('published')->default(0);
            $table->boolean('approved')->default(0);
            $table->boolean('deleted')->default(0);
            $table->DateTime('deadline')->nullable();
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
        Schema::drop('posts');
    }
}
