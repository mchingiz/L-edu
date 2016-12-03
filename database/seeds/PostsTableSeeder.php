<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->delete();

      DB::table('posts')->insert([
          'company_id' => '4',
          'title' => 'headline 1',
          'body' => 'post body',
          'category_id' => '4',
          'subcategory_id' => '1',
      ]);

      DB::table('posts')->insert([
          'company_id' => '4',
          'title' => 'headline 2',
          'body' => 'post body',
          'category_id' => '3',
          'subcategory_id' => '2',
      ]);

      DB::table('posts')->insert([
          'company_id' => '4',
          'title' => 'headline 3',
          'body' => 'post body',
          'category_id' => '4',
          'subcategory_id' => '1',
      ]);

      DB::table('posts')->insert([
          'company_id' => '5',
          'title' => 'headline 4',
          'body' => 'post body',
          'category_id' => '3',
          'subcategory_id' => '2',
      ]);

      DB::table('posts')->insert([
          'company_id' => '5',
          'title' => 'headline 5',
          'body' => 'post body',
          'category_id' => '4',
          'subcategory_id' => '1',
      ]);
    }
}
