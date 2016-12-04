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
          'menu_id' => '3',
      ]);

      DB::table('categories')->insert([
          'id' => '2',
          'name' => 'Events',
          'menu_id' => '2',

      ]);

      DB::table('categories')->insert([
          'id' => '3',
          'name' => 'Sholarship',
          'menu_id' => '4'

      ]);

      DB::table('categories')->insert([
          'id' => '4',
          'name' => 'Grants',
          'menu_id' => '5'

      ]);
    }
}
