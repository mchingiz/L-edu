<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('menus')->delete();

      DB::table('menus')->insert([
          'id' => '1',
          'name' => 'Contact Us',
          'link' => '/contact',

      ]);

      DB::table('menus')->insert([
          'id' => '2',
          'name' => 'Events',
          'link' => '/contact',
      ]);
      
      DB::table('menus')->insert([
          'id' => '3',
          'name' => 'Vacancy',
          'link' => '/vacancy',
      ]);
      
      DB::table('menus')->insert([
          'id' => '4',
          'name' => 'Scholarship',
          'link' => '/scholarship',
      ]);
      
      DB::table('menus')->insert([
          'id' => '5',
          'name' => 'Grants',
          'link' => '/grants',
      ]);
      
    }
}
