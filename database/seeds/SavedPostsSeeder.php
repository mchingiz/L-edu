<?php

use Illuminate\Database\Seeder;

class SavedPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('saved_posts')->delete();

      DB::table('saved_posts')->insert([
          'id' => '1',
          'user_id' => '1',
          'post_id' => '2',
      ]);

      DB::table('saved_posts')->insert([
          'id' => '2',
          'user_id' => '1',
          'post_id' => '3',
      ]);

      DB::table('saved_posts')->insert([
          'id' => '3',
          'user_id' => '1',
          'post_id' => '5',
      ]);

      DB::table('saved_posts')->insert([
          'id' => '4',
          'user_id' => '2',
          'post_id' => '1',
      ]);

      DB::table('saved_posts')->insert([
          'id' => '5',
          'user_id' => '8',
          'post_id' => '5',
      ]);

      DB::table('saved_posts')->insert([
          'id' => '6',
          'user_id' => '8',
          'post_id' => '4',
      ]);
    }
}
