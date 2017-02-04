<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('subcategories')->delete();

      DB::table('subcategories')->insert([
          'id' => '1',
          'category_id' => '1',
          'name' => 'Internship',
          'slug'=>'internship'
      ]);

      DB::table('subcategories')->insert([
          'id' => '2',
          'category_id' => '1',
          'name' => 'Jobs',
          'slug'=>'jobs'
      ]);

      DB::table('subcategories')->insert([
          'id' => '3',
          'category_id' => '1',
          'name' => 'Volunteering',
          'slug'=>'volunteering'
      ]);

      DB::table('subcategories')->insert([
          'id' => '4',
          'category_id' => '2',
          'name' => 'Conference',
          'slug' => 'conference',
      ]);

      DB::table('subcategories')->insert([
          'id' => '5',
          'category_id' => '2',
          'name' => 'Training',
          'slug'=>'training'
      ]);

      DB::table('subcategories')->insert([
          'id' => '6',
          'category_id' => '2',
          'name' => 'Seminar',
          'slug'=>'seminar'

      ]);

      DB::table('subcategories')->insert([
          'id' => '7',
          'category_id' => '3',
          'name' => 'Bachelor',
          'slug'=>'bachelor'

      ]);

      DB::table('subcategories')->insert([
          'id' => '8',
          'category_id' => '3',
          'name' => 'PhD',
          'slug'=>'phD'
     ]);

      DB::table('subcategories')->insert([
          'id' => '9',
          'category_id' => '3',
          'name' => 'Fellowship',
          'slug'=>'fellowship'

      ]);


      DB::table('subcategories')->insert([
          'id' => '10',
          'category_id' => '3',
          'name' => 'Master',
          'slug'=>'master'

      ]);
    }
}
