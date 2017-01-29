<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('info')->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('slug');
            $table->boolean('approved')->default(0);
            $table->boolean('refused')->default(0);
            $table->integer('moderator_id')->nullable();
            $table->text('refuse_reason')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->string('fax')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
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
        Schema::drop('companies');
    }
}
