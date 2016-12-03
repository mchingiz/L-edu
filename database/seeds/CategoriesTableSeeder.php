<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->delete();

      DB::table('categories')->insert([
          'id' => '1',
          'name' => 'Vacancies',
          'link' => 'asdfg',
      ]);

      DB::table('categories')->insert([
          'id' => '2',
          'name' => 'Events',
          'link' => 'asdfg',
      ]);

      DB::table('categories')->insert([
          'id' => '3',
          'name' => 'Sholarship',
          'link' => 'asdfg',
      ]);

      DB::table('categories')->insert([
          'id' => '4',
          'name' => 'Grants',
          'link' => 'asdfg',
      ]);
    }
}
