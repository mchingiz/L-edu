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
            $table->boolean('approved')->default(0);
            $table->boolean('refused')->default(0);
            $table->integer('moderator_id')->nullable();
            $table->text('refuse_reason')->nullable();
            $table->integer('subcategory_id');
            $table->integer('category_id');
            $table->string('slug');
            $table->string('lang');
            $table->boolean('recoverable')->default(true);
            $table->softDeletes();
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
