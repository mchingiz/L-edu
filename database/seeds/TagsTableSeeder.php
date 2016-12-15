<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tags')->delete();

      DB::table('tags')->insert([
          'id' => '1',
          'name' => 'Technology',
          'slug' => 'technology',
      ]);

      DB::table('tags')->insert([
          'id' => '2',
          'name' => 'Business',
          'name' => 'business',
      ]);

      DB::table('tags')->insert([
          'id' => '3',
          'name' => 'Time Management',
          'name' => 'time-management',
      ]);
    }
}
