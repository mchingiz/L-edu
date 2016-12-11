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
      DB::table('posts')->delete();

      DB::table('posts')->insert([
          'id' => '1',
          'company_id' => '4',
          'title' => 'headline 1',
          'body' => 'post body',
          'image'=>'14812660026443.png',
          'view'=>'30',
          'slug'=>'test-post-slug',
          'lang'=>'aze',
          'deadline'=>'2016-12-18',
          'approved'=>'1',
          'category_id' => '4',
          'subcategory_id' => '1',
      ]);

      DB::table('posts')->insert([
          'id' => '2',
          'company_id' => '4',
          'title' => 'headline 2',
          'body' => 'post body 1',
          'image'=>'14812660026443.png',
          'view'=>'30',
          'slug'=>'test-post-slug-2',
          'lang'=>'aze',
          'deadline'=>'2016-12-18',
          'approved'=>'0',
          'category_id' => '4',
          'subcategory_id' => '1',
      ]);

      DB::table('posts')->insert([
          'id' => '3',
          'company_id' => '4',
          'title' => 'headline 3',
          'body' => 'post body',
          'category_id' => '4',
          'subcategory_id' => '1',
      ]);

      DB::table('posts')->insert([
          'id' => '4',
          'company_id' => '5',
          'title' => 'headline 4',
          'body' => 'post body',
          'category_id' => '3',
          'subcategory_id' => '2',
      ]);

      DB::table('posts')->insert([
          'id' => '5',
          'company_id' => '5',
          'title' => 'headline 5',
          'body' => 'post body',
          'category_id' => '4',
          'subcategory_id' => '1',
      ]);
    }
}
