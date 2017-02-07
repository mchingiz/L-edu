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

      // ----------- Vacancies ----------- //

      DB::table('posts')->insert([
          'id' => '1',
          'company_id' => '3',
          'title' => 'Internship opportunity at Azercell',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-1',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'3', // Mehdi - moderator
          'refuse_reason'=>'',
          'deadline'=>'2017-2-15',
          'category_id' => '1',
          'subcategory_id' => '1',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '2',
          'company_id' => '3',
          'title' => 'Vacancy for accountant, Azercell',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image2.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-2',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'3', // Mehdi - moderator
          'refuse_reason'=>'',
          'deadline'=>'2017-2-18',
          'category_id' => '1',
          'subcategory_id' => '2',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '3',
        'company_id' => '3',
        'title' => 'Volunteering at 2nd European Games, Baku',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image3.jpg',
        'view'=>'30',
        'slug'=>'test-post-slug-3',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '3',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '4',
        'company_id' => '3',
        'title' => 'Looking for intern, Bakcell',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image4.png',
        'view'=>'30',
        'slug'=>'test-post-slug-4',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '5',
        'company_id' => '2',
        'title' => 'Volunteering opportunity at TEDxQafqazUniversity',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image5.png',
        'view'=>'30',
        'slug'=>'test-post-slug-5',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '3',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '6',
        'company_id' => '1',
        'title' => 'Vacancy at Code Academy',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image6.jpg',
        'view'=>'30',
        'slug'=>'test-post-slug-6',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '2',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '7',
        'company_id' => '2',
        'title' => 'Vacancy at BHOS',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image7.png',
        'view'=>'30',
        'slug'=>'test-post-slug-7',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '2',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '8',
        'company_id' => '2',
        'title' => 'Internship at BP',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image1.jpg',
        'view'=>'30',
        'slug'=>'test-post-slug-8',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '1',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '9',
        'company_id' => '2',
        'title' => 'Be volunteer at ASAN',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image2.jpg',
        'view'=>'30',
        'slug'=>'test-post-slug-9',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '3',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
        'id' => '10',
        'company_id' => '3',
        'title' => 'Vacancy at IELTS Academy',
        'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
        from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
        of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
        discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
        of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
        The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
        used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
        Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
        'image'=>'image3.jpg',
        'view'=>'30',
        'slug'=>'test-post-slug-10',
        'lang'=>'az',
        'approved'=>'1',
        'refused'=>'0',
        'moderator_id'=>'3', // Mehdi - moderator
        'refuse_reason'=>'',
        'deadline'=>'2017-2-15',
        'category_id' => '1',
        'subcategory_id' => '2',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
      ]);

      // ----------- Events ----------- //

      DB::table('posts')->insert([
          'id' => '11',
          'company_id' => '3',
          'title' => 'Global ChangeMakers Conference',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-11',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-27',
          'category_id' => '2',
          'subcategory_id' => '4',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '12',
          'company_id' => '2',
          'title' => 'The International Training of Mathematicians 2014',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image2.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-12',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-19',
          'category_id' => '2',
          'subcategory_id' => '5',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '13',
          'company_id' => '1',
          'title' => 'Leadership Seminar',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image3.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-13',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-18',
          'category_id' => '2',
          'subcategory_id' => '6',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '14',
          'company_id' => '2',
          'title' => 'Call for Applications | Harvard Training - HPAIR 2017',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image4.png',
          'view'=>'30',
          'slug'=>'test-post-slug-14',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'3', // Mehdi - moderator
          'refuse_reason'=>'',
          'deadline'=>'2017-2-12',
          'category_id' => '2',
          'subcategory_id' => '5',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '15',
          'company_id' => '1',
          'title' => 'The 3rd Conference on Management and Sustainability in Asia (COMSA 2017)',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image5.png',
          'view'=>'30',
          'slug'=>'test-post-slug-15',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'3', // Mehdi - moderator
          'refuse_reason'=>'',
          'deadline'=>'2017-2-26',
          'category_id' => '2',
          'subcategory_id' => '4',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '16',
          'company_id' => '3',
          'title' => 'CfP: The 2nd Annual Training on Academic Integrity, Astana, Kazakhstan',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image6.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-16',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-26',
          'category_id' => '2',
          'subcategory_id' => '5',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '17',
          'company_id' => '2',
          'title' => '4th International Conference on Eurasian Politics and Society, Turkey',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image7.png',
          'view'=>'30',
          'slug'=>'test-post-slug-17',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'3', // Mehdi
          'refuse_reason'=>'',
          'deadline'=>'2017-2-26',
          'category_id' => '2',
          'subcategory_id' => '4',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '18',
          'company_id' => '1',
          'title' => 'The 3rd International Seminars in Fukuoka',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-18',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-22',
          'category_id' => '2',
          'subcategory_id' => '6',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      // ----------- Scholarships ----------- //

      DB::table('posts')->insert([
          'id' => '19',
          'company_id' => '2',
          'title' => 'Scholarship for Bachelors',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-19',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '3',
          'subcategory_id' => '7',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '20',
          'company_id' => '3',
          'title' => 'Scholarship for PhDs',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image2.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-20',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-23',
          'category_id' => '3',
          'subcategory_id' => '8',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '21',
          'company_id' => '1',
          'title' => 'Scholarship for Fellowship 1',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image3.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-21',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-25',
          'category_id' => '3',
          'subcategory_id' => '9',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '22',
          'company_id' => '2',
          'title' => 'Scholarship for Masters',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image4.png',
          'view'=>'30',
          'slug'=>'test-post-slug-22',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-22',
          'category_id' => '3',
          'subcategory_id' => '10',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '23',
          'company_id' => '1',
          'title' => 'Scholarship for Bachelors 2',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image5.png',
          'view'=>'30',
          'slug'=>'test-post-slug-23',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'3', // Mehdi - moderator
          'refuse_reason'=>'',
          'deadline'=>'2017-2-18',
          'category_id' => '3',
          'subcategory_id' => '7',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '24',
          'company_id' => '3',
          'title' => 'Scholarship for PhDs, 2015',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image6.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-24',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'3', // Mehdi - moderator
          'refuse_reason'=>'',
          'deadline'=>'2017-2-17',
          'category_id' => '3',
          'subcategory_id' => '8',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '25',
          'company_id' => '1',
          'title' => 'Fellowship Grant',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image7.png',
          'view'=>'30',
          'slug'=>'test-post-slug-25',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-13',
          'category_id' => '3',
          'subcategory_id' => '9',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '26',
          'company_id' => '2',
          'title' => 'Scholarship for Masters, 2018',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-26',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-16',
          'category_id' => '3',
          'subcategory_id' => '10',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);


      // ----------- Grants ----------- //

      DB::table('posts')->insert([
          'id' => '27',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '28',
          'company_id' => '2',
          'title' => 'Small Grants Scheme 2017 | The BEARR Trust',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image2.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-28',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '29',
          'company_id' => '3',
          'title' => 'Call for Project Proposals | The German Marshall Fund of the United States',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image3.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-29',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '30',
          'company_id' => '1',
          'title' => 'STEP Beyond Travel Grants for Artists',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image3.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-30',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '31',
          'company_id' => '2',
          'title' => 'Open Society Mental Health Initiative',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image4.png',
          'view'=>'30',
          'slug'=>'test-post-slug-31',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '32',
          'company_id' => '3',
          'title' => 'STEP Beyond Grant : Armenia, Azerbaijan, Georgia and Turkey',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image5.png',
          'view'=>'30',
          'slug'=>'test-post-slug-32',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '33',
          'company_id' => '1',
          'title' => 'The European Endowment for Democracy',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image6.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-33',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '34',
          'company_id' => '2',
          'title' => 'The Suleyman Kerimov Foundation Grants',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image7.png',
          'view'=>'30',
          'slug'=>'test-post-slug-34',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      // ----------- Extras ----------- //

      DB::table('posts')->insert([
          'id' => '35',
          'company_id' => '1',
          'title' => 'Web Development boot camp',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image2.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-35',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-1-31',
          'category_id' => '2',
          'subcategory_id' => '5',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '36',
          'company_id' => '1',
          'title' => 'Graphic Design boot camp',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-36',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-1-31',
          'category_id' => '2',
          'subcategory_id' => '5',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '37',
          'company_id' => '1',
          'title' => 'Database Management boot camp',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image3.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-37',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-1-31',
          'category_id' => '2',
          'subcategory_id' => '5',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '38',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications one',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '39',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications two',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '40',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications three',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '41',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications four',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '42',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications five',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '43',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications six',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '44',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications seven',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

      DB::table('posts')->insert([
          'id' => '45',
          'company_id' => '1',
          'title' => '2017 Youth Solidarity Fund: Call for applications eight',
          'body' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
          from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one
          of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature,
          discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes
          of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular  during the Renaissance.
          The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.The standard chunk of Lorem Ipsum
          used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by
          Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
          'image'=>'image1.jpg',
          'view'=>'30',
          'slug'=>'test-post-slug-27',
          'lang'=>'az',
          'approved'=>'1',
          'refused'=>'0',
          'moderator_id'=>'4', // Nigar - admin
          'refuse_reason'=>'',
          'deadline'=>'2017-2-21',
          'category_id' => '4',
          'subcategory_id' => '0',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
      ]);

    }
}
