<?php

use Illuminate\Database\Seeder;

class SearchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('searches')->delete();

      DB::table('searches')->insert([
          'id' => '1',
          'string' => 'pulsuz ders',
      ]);

      DB::table('searches')->insert([
          'id' => '2',
          'string' => 'miqrasiya',
      ]);
    }
}
