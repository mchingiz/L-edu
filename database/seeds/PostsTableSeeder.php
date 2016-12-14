<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

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
          'company_id' => '3',
          'title' => 'headline 1',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'12345.png',
          'view'=>'30',
          'slug'=>'test-post-slug-1',
          'lang'=>'az',
          'deadline'=>'2016-12-18',
          'approved'=>'1',
          'category_id' => '4',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '2',
          'company_id' => '3',
          'title' => 'Not approved  headline 2',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'12345.png',
          'company_id' => '3',
          'title' => 'headline 2',
          'body' => 'post body 1',
          'image'=>'14812660026443.png',
          'view'=>'30',
          'slug'=>'test-post-slug-2',
          'lang'=>'az',
          'deadline'=>'2016-12-18',
          'approved'=>'0',
          'category_id' => '4',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '3',
          'company_id' => '3',
          'title' => 'headline 3',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'12345.png',
          'view'=>'30',
          'slug'=>'test-post-slug-3',
          'lang'=>'aze',
          'deadline'=>'2016-12-18',
          'approved'=>'1',
          'category_id' => '4',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '4',
          'company_id' => '2',
          'title' => 'headline 4',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'12345.png',
          'view'=>'30',
          'slug'=>'test-post-slug-4',
          'lang'=>'aze',
          'deadline'=>'2016-12-18',
          'approved'=>'1',
          'category_id' => '4',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '5',
          'company_id' => '2',
          'title' => 'headline 5',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'12345.png',
          'view'=>'30',
          'slug'=>'test-post-slug-5',
          'lang'=>'aze',
          'deadline'=>'2016-12-18',
          'approved'=>'1',
          'category_id' => '4',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '6',
          'company_id' => '1',
          'title' => 'NoT APPROVEDD heading',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'12345.png',
          'view'=>'30',
          'slug'=>'test-post-slug-6',
          'lang'=>'aze',
          'deadline'=>'2016-12-18',
          'approved'=>'0',
          'category_id' => '4',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '7',
          'company_id' => '1',
          'title' => 'headline 6',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'12345.png',
          'view'=>'30',
          'slug'=>'test-post-slug-6',
          'lang'=>'aze',
          'deadline'=>'2016-12-18',
          'approved'=>'1',
          'category_id' => '4',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);
    }
}
