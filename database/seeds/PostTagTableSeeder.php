<?php

use Illuminate\Database\Seeder;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('post_tag')->delete();

      DB::table('post_tag')->insert([
          'id' => '1',
          'post_id' => '1',
          'tag_id' => '1', // Technology
      ]);

      DB::table('post_tag')->insert([
          'id' => '2',
          'post_id' => '1',
          'tag_id' => '2', // Business
      ]);

      DB::table('post_tag')->insert([
          'id' => '3',
          'post_id' => '1',
          'tag_id' => '3', // Time Management
      ]);

      DB::table('post_tag')->insert([
          'id' => '4',
          'post_id' => '2',
          'tag_id' => '2', // Business
      ]);

      DB::table('post_tag')->insert([
          'id' => '5',
          'post_id' => '3',
          'tag_id' => '2', // Business
      ]);

      DB::table('post_tag')->insert([
          'id' => '6',
          'post_id' => '3',
          'tag_id' => '3', // Time Management
      ]);
    }
}
