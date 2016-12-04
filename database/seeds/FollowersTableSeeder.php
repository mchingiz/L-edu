<?php

use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('followers')->delete();

      DB::table('followers')->insert([
          'id' => '1',
          'user_id' => '1', // Chingiz
          'company_id' => '5', // Code Academy
      ]);

      DB::table('followers')->insert([
          'id' => '2',
          'user_id' => '1', // Chingiz
          'company_id' => '6', // BBf
      ]);

      DB::table('followers')->insert([
          'id' => '3',
          'user_id' => '2', // Senem
          'company_id' => '5', // Code Academy
      ]);

      DB::table('followers')->insert([
          'id' => '4',
          'user_id' => '8', // Ulvi
          'company_id' => '7', // Azercell
      ]);

      DB::table('followers')->insert([
          'id' => '5',
          'user_id' => '8', // Ulvi
          'company_id' => '5', // Code Academy
      ]);

      DB::table('followers')->insert([
          'id' => '6',
          'user_id' => '8', // Ulvi
          'company_id' => '6', // BBF
      ]);
    }
}
