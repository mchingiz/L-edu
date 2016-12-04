<?php

use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('reports')->delete();

      DB::table('reports')->insert([
          'id' => '1',
          'report_type_id' => '1', // Fake profile
          'text' => 'Bu profile fakedi',
          'email' => 'memmedlicngz@gmail.com',
          'user_id' => '1', // Chingiz
          'post_id' => null,
          'company_id' => '5',
      ]);

      DB::table('reports')->insert([
          'id' => '2',
          'report_type_id' => '2', // Fake post
          'text' => 'Bu post fakedi',
          'email' => 'senem@gmail.com',
          'user_id' => '2', // Senem
          'post_id' => '3',
          'company_id' => null,
      ]);

      DB::table('reports')->insert([
          'id' => '3',
          'report_type_id' => '3', // Violence
          'text' => 'Violence!!!',
          'email' => 'ulvi@gmail.com',
          'user_id' => '8', // Ulvi
          'post_id' => '2',
          'company_id' => null,
      ]);

      DB::table('reports')->insert([
          'id' => '4',
          'report_type_id' => '3', // Violence
          'text' => 'Violence!!!',
          'email' => 'memmedlicngz@gmail.com',
          'user_id' => '1', // Chingiz
          'post_id' => '23',
          'company_id' => null,
      ]);

      DB::table('reports')->insert([
          'id' => '5',
          'report_type_id' => '4', // Drug
          'text' => 'It is a drug company',
          'email' => 'memmedlicngz@gmail.com',
          'user_id' => '1', // Chingiz
          'post_id' => null,
          'company_id' => '6',
      ]);
    }
}
