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
          'slug' => 'contactus',

      ]);

      DB::table('menus')->insert([
          'id' => '2',
          'name' => 'Events',
          'slug' => 'events',
      ]);
      
      DB::table('menus')->insert([
          'id' => '3',
          'name' => 'Vacancy',
          'slug' => 'vacancy',
      ]);
      
      DB::table('menus')->insert([
          'id' => '4',
          'name' => 'Scholarship',
          'slug' => 'scholarship',
      ]);
      
      DB::table('menus')->insert([
          'id' => '5',
          'name' => 'Grants',
          'slug' => 'grants',
      ]);
      
    }
}
