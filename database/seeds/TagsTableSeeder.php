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
      ]);

      DB::table('tags')->insert([
          'id' => '2',
          'name' => 'Business',
      ]);

      DB::table('tags')->insert([
          'id' => '3',
          'name' => 'Time Management',
      ]);
    }
}
